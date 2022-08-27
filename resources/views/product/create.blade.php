@extends('layouts.admin')

@section('title')
    Create Product
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Product</h4>
        </div>
        <form class="form-horizontal" action='{{ route('product.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Master Product</label>
                <div class="col-md-12">
                    <select name="master_product_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Opsi</option>
                        @foreach ($masterProducts as $item)
                            <option value="{{$item->id}}">{{$item->product_name}}</option>
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
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-group col-md-12">
                <input type="checkbox" name="" id="addStock" value="Percent" data-checkbox="icheckbox_square-red">
                <label for="addStock" class="text-muted mr-2">With Add Stock</label>
            </div>

            <div class='form-group' id="inputQty">
                <label for='' class="col-md-12">Qty</label>
                <div class="col-md-12">
                    <input type='number' class='form-control' name='qty' id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).on('ready', function () {
        // WITH Add Stock
        if($('#addStock').is(':checked')) {
            $('#inputQty').show();
        }else {
            $('#inputQty').hide();
        }
    });

    $(document).on('click', '#addStock', function () {
        // WITH Add Stock
        if($(this).is(':checked')) {
            $('#inputQty').show();
        }else {
            $('#inputQty').hide();
        }
    })
</script>