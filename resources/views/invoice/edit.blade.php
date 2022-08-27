@extends('layouts.admin')

@section('title')
    Edit Invoice
@endsection

@section('content')
<form action="{{ route('invoice.update', [$invoice->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="white-box">
        <h4>Edit Invoice</h4>
        <table class="table">
            <tr>
                <th>No Invoice</th>
                <td>
                    {{ $invoice->no_inv }}
                </td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>
                    {{ $invoice->payment_method }}
                </td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>
                    <input type="number" name="amount" class="form-control" value="{{ $invoice->amount }}">
                </td>
            </tr>
            <tr>
                <th>Discount</th>
                <td>
                    @php
                        if ($invoice->discount_status == 'Percent') {
                            echo ($invoice->discount*100).'%';
                        }elseif ($invoice->discount_status == 'Numeric') {
                            echo number_format($invoice->discount);
                        }else {
                            echo '-';
                        }
                    @endphp
                </td>
            </tr>
            <tr>
                <th>Change</th>
                <td>
                    {{ number_format($invoice->change) }}
                </td>
            </tr>
            <tr>
                <th>Pay</th>
                <td>
                    <input type="number" name="pay" class="form-control" value="{{ $invoice->pay }}">
                </td>
            </tr>
            <tr>
                <th>Transaction By</th>
                <td>
                    {{ $invoice->user->username }}
                </td>
            </tr>
            <tr>
                <th>Date</th>
                <td>
                    {{ $invoice->created_at->diffForHumans() }}
                </td>
            </tr>
            <tr>
                <th>Note</th>
                <td>
                    <textarea name="note" id="" cols="30" rows="5" class="form-control">{{ $invoice->note }}</textarea>
                </td>
            </tr>
            {{-- <tr>
                <th>Action</th>
                <td>
                    <a href="{{ route('pos.invoice', [$invoice->id]) }}" class="btn btn-success"><i class="fa fa-print"></i></a>
                    <a href="{{ route('invoice.edit', [$invoice->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    <form id="delete" action="{{ route('invoice.destroy', [$invoice->id]) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr> --}}
        </table>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoiceDetails as $item)
                    <tr>
                        <input type="hidden" class="hargaJual" value="{{ masterProduct($item->master_product_id)->hj }}">
                        <input type="hidden" name="item_id[]" value="{{ $item->id }}">
                        <td style="width: 60%;">
                            <select name="product[]" id="" class="form-control">
                                <option value="">Select Product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ ($item->product_id == $product->id) ? 'selected':'' }}>{{ $product->product->product_name.' - '.$product->varian->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 20%;">
                            <input type="number" name="qty[]" class="form-control" value="{{ $item->qty }}">
                        </td>
                        <td style="width: 20%;">
                            <input type="number" name="price[]" class="form-control" value="{{ $item->price }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    // EDIT QTY
    $(document).on('keyup', 'input[name="qty[]"]', function(){
        var parent = $(this).closest('tr');
        var price  = parseFloat($('.hargaJual',parent).val());
        var choose = parseFloat($('input[name="qty[]"]',parent).val());
        if (!choose) {
            choose = 0;
        }
        $(this).prev().text('x'+choose);
        $(this).val(choose);
        $('.price input[name="price[]"]',parent).prev().text(choose*price);
        $('input[name="price[]"]',parent).val(choose*price);

        // calc_total();
    });

    // function calc_total(){
    //     var sum = 0;
    //     $(".price").each(function(){
    //             sum += parseFloat($(this).text());
    //     });
    //     $('#amount').text(sum);
    //     $('#inputAmount').val(sum);
    // }
</script>