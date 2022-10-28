@extends('layouts.admin')

@section('title')
    Buat Akun
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Akun</h4>
        </div>
        <form class="form-horizontal" action='{{ route('akun.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Ruh Belanja</label>
                <div class="col-md-12">
                    <select name="ruh_belanja_id" id="ruh_belanja_id" class='form-control'>
                        <option value="">Pilih Opsi</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->code_satker."-".$item->name_satker }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Code</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='code' id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection