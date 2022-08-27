@extends('layouts.admin')

@section('title')
    User
@endsection

@section('content')
    <div class='white-box'>
        <div class="row">
            <div class="col-sm-10">
                <h4 class="box-title">List User</h4>
            </div>
            <div class="col-sm-2">
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('user.create') }}" class="btn btn-primary font-16"><i class="icon-plus"></i> Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
        <table id="dataTable" cellspacing="0" width="100%" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role->name }}</td>
                        <td>
                            <a href="{{ route('user.edit', [$item->id]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <button onclick="$('#delete').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                            <form id="delete" action="{{ route('user.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
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