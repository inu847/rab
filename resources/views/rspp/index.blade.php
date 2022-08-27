@extends('layouts.admin')

@section('title')
    RSPP
@endsection

@section('content')
    <div class='white-box'>
        <div class="row">
            <div class="col-sm-10">
                <h4 class="box-title">List RSPP</h4>
            </div>
            <div class="col-sm-2">
                <ul class="list-inline">
                    {{-- <li>
                        <button type="button" data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary font-16"><i class="icon-plus"></i> Import RSPP</button>
                    </li> --}}
                    <li>
                        <a href="{{ route('rspp.create') }}" class="btn btn-success font-16"><i class="icon-plus"></i> Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
        <table id="dataTable" cellspacing="0" width="100%" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Program</th>
                    <th>Kegiatan</th>
                    <th>Kro</th>
                    <th>Ro</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->program }}</td>
                        <td>{{ $item->kegiatan }}</td>
                        <td>{{ $item->kro }}</td>
                        <td>{{ $item->ro }}</td>
                        <td>
                            <a href="{{ route('rspp.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                            <form id="delete" action="{{ route('rspp.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MODALS IMPORT --}}
    {{-- <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Import RSPP</h4> </div>
                <form action="{{ route('rspp.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">File:</label>
                            <input type="file" class="form-control" name="masterProduct">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection