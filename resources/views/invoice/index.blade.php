@extends('layouts.admin')

@section('title')
    Invoice
@endsection

@section('content')
    <div class='white-box'>
        <div class="row">
            <div class="col-sm-6">
                <h4 class="box-title">List Invoice</h4>
            </div>
            <div class="col-sm-6">
                <ul class="list-inline">
                    {{-- <li>
                        <button type="button" data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary font-16"><i class="icon-plus"></i> Import Master Product</button>
                    </li> --}}
                    {{-- <li>
                        <a href="{{ route('invoice.create') }}" class="btn btn-success font-16"><i class="icon-plus"></i> Tambah Data</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="table-responsive">
            <table id="dataTable" cellspacing="0" width="100%" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Invoice</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Change</th>
                        <th>Pay</th>
                        <th>Transaction By</th>
                        <th>Date</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{ $item->no_inv }}</td>
                            <td>{{ $item->payment_method }}</td>
                            <td>{{ number_format($item->amount) }}</td>
                            <td>
                                @php
                                    if ($item->discount_status == 'Percent') {
                                        echo ($item->discount*100).'%';
                                    }elseif ($item->discount_status == 'Numeric') {
                                        echo number_format($item->discount);
                                    }else {
                                        echo '-';
                                    }
                                @endphp
                            </td>
                            <td>{{ number_format($item->change) }}</td>
                            <td>{{ number_format($item->pay) }}</td>
                            <td>{{ $item->user->username }}</td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>{{ $item->note ?? '-' }}</td>
                            <td>
                                <a href="{{ route('pos.invoice', [$item->id]) }}" class="btn btn-success"><i class="fa fa-print"></i></a>
                                <a href="{{ route('invoice.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                {{-- <button type="button" id="edit" data-id="{{$item->id}}" class="btn btn-info"><i class="fa fa-pencil"></i></button> --}}
                                <button type="button" id="detail" data-id="{{$item->id}}" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <form id="delete" action="{{ route('invoice.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- MODALS IMPORT --}}
    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Import Inventory Stock</h4> </div>
                <form action="{{ route('inventory-stock.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">File:</label>
                            <input type="file" class="form-control" name="masterVarian">
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).on('click', '#detail', function () {
        var id = $(this).data('id');
        
        $.ajax({
            url: "{{ route('invoice.detail', '') }}"+'/'+id, 
            type: 'GET', 
            dataType  : 'json',
        })
        .done(function(data) {
            console.log(data);
            $('.modal-body').html(data);
            $('#responsive-modal').modal();
        })
        .fail(function(response) {
            $('.modal-body').html(response.responseText);
            $('#responsive-modal').modal();
            // console.log(response);
        });
    })

    $(document).on('click', '#edit', function () {
        var id = $(this).data('id');
        
        $.ajax({
            url: "/invoice/edit/"+id, 
            type: 'GET', 
            dataType  : 'json',
        })
        .done(function(data) {
            console.log(data);
            $('.modal-body').html(data);
            $('#responsive-modal').modal();
        })
        .fail(function(response) {
            $('.modal-body').html(response.responseText);
            $('#responsive-modal').modal();
            // console.log(response);
        });
    })
</script>
