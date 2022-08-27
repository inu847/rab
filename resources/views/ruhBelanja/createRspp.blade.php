@extends('layouts.admin')

@section('title')
    Create RSPP
@endsection

@section('content')

<div class="white-box">
    <h4 style="color: #0078bc;">RUH BELANJA</h4>
    <table class="table">
        <tr>
            <th>Tahun Anggaran</th>
            <td>{{ $data->th_anggaran }}</td>
        </tr>
        <tr>
            <th>Code Satker</th>
            <td>{{ $data->code_satker }}</td>
        </tr>
        <tr>
            <th>Name Satker</th>
            <td>{{ $data->name_satker }}</td>
        </tr>
        <tr>
            <th>Code K/L Unit</th>
            <td>{{ $data->code_kl_unit }}</td>
        </tr>
        <tr>
            <th>Name K/L Unit</th>
            <td>{{ $data->name_kl_unit }}</td>
        </tr>
    </table>
</div>


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

            <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
        </form>
    </div>
</div>

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Add Komponen</h4>
        </div>
        <table class="table table-responsive table-bordered table-striped">
            <thead style="background-color: #a7a7a7;">
                <tr>
                    <th>Code</th>
                    <th>Komponen</th>
                </tr>
            </thead>
            <tbody id="table-komponen"></tbody>
        </table>
        <div class="m-t-5 m-b-5">
            <button type="button" id="addKomponen" class="btn btn-info"><i class="icon-plus"></i> Tambah Komponen</button>
        </div>
    </div>
</div>

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Add Sub Komponen</h4>
        </div>
        <table class="table table-responsive table-bordered table-striped">
            <thead style="background-color: #a7a7a7;">
                <tr>
                    <th>Code</th>
                    <th>Komponen</th>
                </tr>
            </thead>
            <tbody id="table-komponen"></tbody>
        </table>
        <div class="m-t-5 m-b-5">
            <button type="button" id="addKomponen" class="btn btn-info"><i class="icon-plus"></i> Tambah Komponen</button>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).on('click', '#addKomponen', function () {
        elem = `<tr>
                    <td>
                        <input type="text" class="form-control" name="code[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name[]">
                    </td>
                </tr>`;
        $('#table-komponen').append(elem);
    })
</script>