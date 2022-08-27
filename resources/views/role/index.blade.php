@extends('layouts.admin')

@section('title')
    Role
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-10'>
            <h4 class='box-title'>List Role</h4>
        </div>
        <div class='col-sm-2'>
            <a href="{{ route('role.create') }}" class="btn btn-primary"><i class="icon-plus"></i> Tambah Data</a>
        </div>
        <table id="dataTable" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($role as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ route('role.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                            <form id="delete" action="{{ route('role.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
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