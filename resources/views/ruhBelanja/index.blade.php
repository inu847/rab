@extends('layouts.admin')

@section('title')
    Ruh Belanja
@endsection

@section('content')
    <div class='white-box'>
        <div class="row">
            <div class="col-sm-10">
                <h4 class="box-title">List Ruh Belanja</h4>
            </div>
            <div class="col-sm-2">
                <ul class="list-inline">
                    <li>
                        {{-- <button type="button" data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary font-16"><i class="icon-plus"></i> Import Ruh Belanja</button> --}}
                        <button type="button" id="createRuhBelanja" class="btn btn-primary font-16"><i class="icon-plus"></i> Tambah Data</button>
                    </li>
                    <li>
                        {{-- <a href="{{ route('ruhBelanja.create') }}" class="btn btn-success font-16"><i class="icon-plus"></i> Tambah Data</a> --}}
                    </li>
                </ul>
            </div>
        </div>
        <table id="dataTable" cellspacing="0" width="100%" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Satker</th>
                    <th>K/L Unit</th>
                    <th>Tahun Anggaran</th>
                    <th>Tools</th>
                    @if (can('ruh'))
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->code_satker.' - '.$item->name_satker }}</td>
                        <td>{{ $item->code_kl_unit.' - '.$item->name_kl_unit }}</td>
                        <td>{{ $item->th_anggaran }}</td>
                        <td>
                            <a href="{{ route('ruhBelanja.createRspp', [$item->id]) }}" class="btn btn-warning m-3">Rekam Kegiatan</a>
                            <a href="{{ route('ruhBelanja.insertAkun', [$item->id]) }}" class="btn btn-primary m-3">Tambah Akun</a>
                        </td>
                        @if (can('ruh'))
                            <td>
                                <a href="{{ route('ruhBelanja.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                {{-- <button type="button" onclick="edit({{$item->id}});" class="btn btn-info"><i class="fa fa-pencil"></i></button> --}}
                                <button onclick="$('#delete{{ $key }}').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <form id="delete{{ $key }}" action="{{ route('ruhBelanja.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MODALS IMPORT --}}
    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">
                
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).on('click', '#createRuhBelanja', function () {
        $.ajax({
            url: "{{ route('ruhBelanja.create') }}", 
            type: 'GET', 
            dataType  : 'json',
        })
        .done(function(data) {
            console.log(data);
            $('#responsive-modal').modal();
            $('#modal-content').html(data);
        })
        .fail(function(response) {
            $('#responsive-modal').modal();
            $('#modal-content').html(response.responseText);
        });
    })

    function edit(id) {
        $.ajax({
            url: "/ruhBelanja/"+id+"/edit", 
            type: 'GET', 
            dataType  : 'json',
        })
        .done(function(data) {
            console.log(data);
            $('#responsive-modal').modal();
            $('#modal-content').html(data);
        })
        .fail(function(response) {
            $('#responsive-modal').modal();
            $('#modal-content').html(response.responseText);
        });
    }
</script>