@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah User</h4>
        </div>
        <form class="form-horizontal" action='{{ route('user.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='form-group'>
                <label for='' class="col-md-12">Username</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='username' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type='email' class='form-control' name='email' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Role</label>
                <div class="col-md-12">
                    <select name="role_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Opsi</option>
                        @foreach ($role as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type='password' class='form-control' name='password' id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection