@extends('layouts.admin')

@section('title')
    Buat Akun Detail
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Akun Detail</h4>
        </div>
        <form class="form-horizontal" action='{{ route('akun-detail.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Ruh Belanja</label>
                <div class="col-md-12">
                    <select name="ruh_belanja_id" id="ruh_belanja_id" class='form-control' required>
                        <option value="" selected disabled>Pilih Ruh Belanja</option>
                        @foreach ($ruh_belanja as $item)
                            <option value="{{ $item->id }}">{{ $item->code_satker." - ".$item->name_satker }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Akun</label>
                <div class="col-md-12">
                    <select name="akun_id" id="akun_id" class='form-control' required>
                        <option value="" selected disabled>Pilih Akun</option>
                        @foreach ($akun as $item)
                            <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group' id="form-header">
                <label for='' class="col-md-12">Header</label>
                <div class="col-md-12">
                    <select name="header_id" id="header_id" class='form-control'>
                        <option value="">Pilih Header</option>
                        @foreach ($header as $item)
                            <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kategori</label>
                <div class="col-md-12">
                    <select name="category" class='form-control' id="">
                        <option value="">Pilih Kategori</option>
                        <option value="Uang Harian">Uang Harian</option>
                        <option value="Penginapan">Penginapan</option>
                        <option value="Transport">Transport</option>
                    </select>
                </div>
            </div>
            {{-- <div class='form-group'>
                <label for='' class="col-md-12">Kategori</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='category' id='' placeholder=''>
                </div>
            </div> --}}
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' id='' placeholder='' required>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama Kota/Kabupaten</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='address' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Quantity</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='qty' id='' placeholder='' required>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">UOM</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='uom' id='' placeholder='' required>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Quantity 2</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='qty2' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Uom 2</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='uom2' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Quantity 3</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='qty3' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Uom 3</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='uom3' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Price</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='price' id='' placeholder='' required>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>

@endsection