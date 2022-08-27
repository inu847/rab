@extends('layouts.admin')

@section('title')
    Create Product
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Create Barcode</h4>
        </div>
        <form class="form-horizontal" action='{{ route('product.barcode') }}' method='GET' enctype='multipart/form-data'>
            @csrf
            <div id="addFormBarcode"></div>

            <div class="form-group col-md-12">
                <button id="addBarcode" class="btn btn-info" type="button">Add Barcode</button>
            </div>

            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    var elem = `<div class='form-group'>
                <label for='' class="col-md-12">Product</label>
                <div class="col-md-6">
                    <select name="product_id[]" class='form-control' id="">
                        <option value="" selected disabled>Select Product</option>
                        @foreach ($products as $item)
                            <option value="{{$item->id}}">{{ masterProduct($item->master_product_id)->product_name.' - '.masterVarian($item->master_varian_id)->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="integer" name="qty[]" class="form-control" placeholder="Quantity">
                </div>
            </div>`
    $(document).on('ready', function () {
        $('#addFormBarcode').append(elem);
    })
    $(document).on('click', '#addBarcode', function () {
        $('#addFormBarcode').append(elem);
    })
</script>