@extends('layouts.admin')

@section('title')
    Product In
@endsection

@section('content')
    <div class='white-box'>
        <div class="row">
            <div class="col-sm-6">
                <h4 class="box-title">List Product In</h4>
            </div>
            <div class="col-sm-6">
                <ul class="list-inline">
                    {{-- <li>
                        <button type="button" data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary font-16"><i class="icon-plus"></i> Import Master Product</button>
                    </li> --}}
                    {{-- <li>
                        <a href="{{ route('productIn.create') }}" class="btn btn-success font-16"><i class="icon-plus"></i> Tambah Data</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <table id="dataTable" cellspacing="0" width="100%" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Varian</th>
                    <th>Product In</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        {{-- <td>{{ $item->inventory }}</td> --}}
                        <td>{{ $item->inventory->product->product->product_name }}</td>
                        <td>{{ $item->inventory->product->varian->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td>{{ $item->note }}</td>
                        <td>
                            {{-- <a href="{{ route('productIn.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a> --}}
                            <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                            <form id="delete" action="{{ route('productIn.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection