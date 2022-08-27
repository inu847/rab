@extends('layouts.admin')

@section('title')
    Edit RSPP
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit RSPP</h4>
        </div>
        <form class="form-horizontal" action='{{ route('master-product.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for='' class="col-md-12">Photo</label>
                @if ($data->avatar)
                    <img src="{{asset('storage/'.$data->avatar)}}" alt="" width="100px" style="margin-left: 15px;">
                    <small class="text-muted col-md-12">*only for change</small>
                @endif
                <div class="col-md-12">
                    <input type='file' class='form-control' name='avatar' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Product Name</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='product_name' value="{{ $data->product_name }}" id='' placeholder=''>
                </div>
            </div>
            {{-- <div class='form-group'>
                <label for='' class="col-md-12">Qty</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='qty' value="{{ $data->qty }}" id='' placeholder=''>
                </div>
            </div> --}}
            <div class='form-group'>
                <label for='' class="col-md-12">Harga Pembelian Product</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='hpp' value="{{ $data->hpp }}" id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Harga Jual Product</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='hj' value="{{ $data->hj }}" id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection