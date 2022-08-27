@extends('layouts.admin')

@section('title')
    Create Inventory Stock
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Add Inventory Stock</h4>
        </div>
        <form class="form-horizontal" action='{{ route('inventory-stock.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Product</label>
                <div class="col-md-12">
                    <select name="product_id" id="" class='form-control select2'>
                        <option value="">Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{$product->id}}">{{ $product->product->product_name.' - '.$product->varian->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Stock In</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='product_in' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Note</label>
                <div class="col-md-12">
                    <textarea name="note" id="" cols="30" rows="5" class='form-control'></textarea>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).on('ready', function () {
            $(".select2").select2();
        })
    </script>
@endsection