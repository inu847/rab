@extends('layouts.admin')

@section('title')
    Create RSPP
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Add RSPP</h4>
        </div>
        <form class="form-horizontal" action='{{ route('rspp.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Code</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='code' id='' placeholder='Masukkan Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Program</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='program' id='' placeholder='Masukkan Program'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kegiatan</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='kegiatan' id='' placeholder='Masukkan Kegiatan'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kro</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='kro' id='' placeholder='Masukkan Kro'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Ro</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='ro' id='' placeholder='Masukkan Ro'>
                </div>
            </div>
            
            <table class="table table-responsive table-bordered table-striped">
                <thead style="background-color: #a7a7a7;">
                    <tr>
                        <th>Numbering</th>
                        <th>Komponen</th>
                    </tr>
                </thead>
                <tbody id="table-komponen">
                    
                </tbody>
            </table>
            <div class="m-t-5 m-b-5">
                <button type="button" id="addKomponen" class="btn btn-info"><i class="icon-plus"></i> Tambah Komponen</button>
            </div>

            <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
        </form>
    </div>
</div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).on('click', '#addKomponen', function () {
        elem = `<tr>
                    <td>
                        <input type="text" class="form-control" name="numbering[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="description[]">
                    </td>
                </tr>`;
        $('#table-komponen').append(elem);
    })
</script>