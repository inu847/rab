@extends('layouts.admin')

@section('title')
    Akun Detail
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-10'>
            <h4 class='box-title'>List Akun Detail</h4>
        </div>
        <div class='col-sm-2'>
            <a href="{{ route('akun-detail.create') }}" class="btn btn-primary"><i class="icon-plus"></i> Tambah Akun Detail</a>
        </div>
        <table id="dataTable" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Akun</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>UOM</th>
                    <th>Kota/Kabupaten</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->akun->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->name }}</td>
                        <td>Rp.{{ number_format($item->price) }}</td>
                        <td>{{ $item->uom }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ route('akun-detail.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <button onclick="$('#delete{{ $key }}').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                            <form id="delete{{ $key }}" action="{{ route('akun-detail.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
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
@endsection