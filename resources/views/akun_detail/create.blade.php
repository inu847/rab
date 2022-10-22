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
                <label for='' class="col-md-12">Akun</label>
                <div class="col-md-12">
                    <select name="akun_id" class='form-control' id="">
                        <option value="Uang Harian">Pilih Akun</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kategori</label>
                <div class="col-md-12">
                    <select name="category" class='form-control' id="">
                        <option value="Uang Harian">Pilih Kategori</option>
                        <option value="Uang Harian">Uang Harian</option>
                        <option value="Penginapan">Penginapan</option>
                        <option value="Transport">Transport</option>
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama Kota/Kabupaten</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='address' id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">UOM</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='uom' id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Quantity</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='qty' id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Price</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='price' id='' placeholder='Code'>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection