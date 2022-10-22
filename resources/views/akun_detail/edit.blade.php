@extends('layouts.admin')

@section('title')
    Edit Akun Detail
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit Akun Detail</h4>
        </div>
        <form class="form-horizontal" action='{{ route('akun-detail.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for='' class="col-md-12">Akun</label>
                <div class="col-md-12">
                    <select name="akun_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Akun</option>
                        @foreach ($akun as $item)
                            <option value="{{ $item->id }}" {{ ($data->akun_id == $item->id) ? 'selected':'' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Kategori</label>
                <div class="col-md-12">
                    <select name="category" class='form-control' id="">
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Uang Harian" {{ ($data->category == 'Uang Harian') ? 'selected':'' }}>Uang Harian</option>
                        <option value="Penginapan" {{ ($data->category == 'Penginapan') ? 'selected':'' }}>Penginapan</option>
                        <option value="Transport" {{ ($data->category == 'Transport') ? 'selected':'' }}>Transport</option>
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' value="{{ $data->name }}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama Kota/Kabupaten</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='address' value="{{ $data->address }}" id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">UOM</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='uom' value="{{ $data->uom }}" id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Quantity</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='qty' value="{{ $data->qty }}" id='' placeholder='Code'>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Price</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='price' value="{{ $data->price }}" id='' placeholder='Code'>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection