@extends('layouts.admin')

@section('title')
    Edit Product
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit Product</h4>
        </div>
        <form class="form-horizontal" action='{{ route('product.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for='' class="col-md-12">Master Product</label>
                <div class="col-md-12">
                    <select name="master_product_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Opsi</option>
                        @foreach ($masterProducts as $item)
                            <option value="{{$item->id}}" {{ ($item->id == $data->master_product_id) ? 'selected':'' }}>{{$item->product_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Master Varian</label>
                <div class="col-md-12">
                    <select name="master_varian_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Opsi</option>
                        @foreach ($masterVarians as $item)
                            <option value="{{$item->id}}" {{ ($item->id == $data->master_varian_id) ? 'selected':'' }}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection