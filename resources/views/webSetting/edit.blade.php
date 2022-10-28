@extends('layouts.admin')

@section('title')
    General Setting
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>GENERAL SETTING</h4>
        </div>
        <form class="form-horizontal" action='{{ route('general-setting.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')

            <div class='form-group'>
                <label for='' class="col-md-12">Site Logo</label>
                @if ($data->site_logo)
                    <img src="{{asset('storage/'.$data->site_logo)}}" alt="" width="100px" style="margin-left: 15px;">
                    <small class="text-muted col-md-12">*only for change</small>
                @endif
                <div class="col-md-12">
                    <input type='file' class='form-control' name='site_logo' value="{{$data->site_logo}}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Site Title1</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='site_title1' value="{{$data->site_title1}}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Site Title2</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='site_title2' value="{{$data->site_title2}}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Address</label>
                <div class="col-md-12">
                    <textarea class='form-control' name='address' id="" cols="30" rows="5">{{$data->address}}</textarea>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kode Pos</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='kode_pos' value="{{$data->kode_pos}}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Phone</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='phone' value="{{$data->phone}}" id='' placeholder=''>
                </div>
            </div>

            <h4 class='box-title'>Tanda Tangan</h4>
            <hr>

            <h3>Kanan</h3>
            <div class='form-group'>
                <label for='' class="col-md-12">NIP</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="nip_right" value="{{ $data->nip_right }}">
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="name_right" value="{{ $data->name_right }}">
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Jabatan</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="jabatan_right" value="{{ $data->jabatan_right }}">
                </div>
            </div>

            <h3>Kiri</h3>
            <div class='form-group'>
                <label for='' class="col-md-12">NIP</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="nip_left" value="{{ $data->nip_left }}">
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="name_left" value="{{ $data->name_left }}">
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Jabatan</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="jabatan_left" value="{{ $data->jabatan_left }}">
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection