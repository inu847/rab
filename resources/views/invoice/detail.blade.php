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
            {{ number_format($invoice->amount) }}
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
            {{ number_format($invoice->pay) }}
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
            {{ $invoice->note ?? '-' }}
        </td>
    </tr>
    <tr>
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
    </tr>
</table>

<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Varian</th>
            <th>Qty</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invoiceDetails as $item)
            <tr>
                <td>{{ $item->product->product_name }}</td>
                <td>{{ $item->varian->name }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ number_format($item->price) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>