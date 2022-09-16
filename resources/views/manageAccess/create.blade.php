@extends('layouts.admin')

@section('title')
    Manage Access
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Manage Access</h4>
        </div>
        <form action='{{ route('manage-access.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Role</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" value="{{ $role->name }}" disabled>
                </div>
                <input type="hidden" name="role_id" value="{{ $role->id }}">
            </div>

            <hr class="col-md-12">

            <div class="form-group m-5">
                <label for="">Input RUH BELANJA</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="radio" {{ ($data['ruh'] == 1) ? 'checked':'' }} class="check" id="ruh1" value="1" name="ruh" data-radio="iradio_square-red">
                            <label for="ruh1">Yes</label>
                            <input type="radio" {{ ($data['ruh'] == 0) ? 'checked':'' }} class="check" id="ruh0" value="0" name="ruh" data-radio="iradio_square-red">
                            <label for="ruh0">No</label>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="col-md-12">

            <div class="form-group m-5">
                <label for="">Input RSPP</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="radio" {{ ($data['rspp'] == 1) ? 'checked':'' }} class="check" id="rspp1" value="1" name="rspp" data-radio="iradio_square-red">
                            <label for="rspp1">Yes</label>
                            <input type="radio" {{ ($data['rspp'] == 0) ? 'checked':'' }} class="check" id="rspp0" value="0" name="rspp" data-radio="iradio_square-red">
                            <label for="rspp0">No</label>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="col-md-12">

            <div class="form-group m-5">
                <label for="">Input KRO</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="radio" {{ ($data['kro'] == 1) ? 'checked':'' }} class="check" id="kro1" value="1" name="kro" data-radio="iradio_square-red">
                            <label for="kro1">Yes</label>
                            <input type="radio" {{ ($data['kro'] == 0) ? 'checked':'' }} class="check" id="kro0" value="0" name="kro" data-radio="iradio_square-red">
                            <label for="kro0">No</label>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="col-md-12">

            <div class="form-group m-5">
                <label for="">Input RO</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="radio" {{ ($data['ro'] == 1) ? 'checked':'' }} class="check" id="ro1" value="1" name="ro" data-radio="iradio_square-red">
                            <label for="ro1">Yes</label>
                            <input type="radio" {{ ($data['ro'] == 0) ? 'checked':'' }} class="check" id="ro0" value="0" name="ro" data-radio="iradio_square-red">
                            <label for="ro0">No</label>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="col-md-12">

            <div class="form-group m-5">
                <label for="">Komponen</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="radio" {{ ($data['komponen'] == 1) ? 'checked':'' }} class="check" id="komponen1" value="1" name="komponen" data-radio="iradio_square-red">
                            <label for="komponen1">Yes</label>
                            <input type="radio" {{ ($data['komponen'] == 0) ? 'checked':'' }} class="check" id="komponen0" value="0" name="komponen" data-radio="iradio_square-red">
                            <label for="komponen0">No</label>
                        </li>
                    </ul>
                </div>
            </div>

            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection