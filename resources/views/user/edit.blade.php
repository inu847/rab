@extends('layouts.admin')

@section('title')
    Edit User
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit User</h4>
        </div>
        <form class="form-horizontal" action='{{ route('user.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for='' class="col-md-12">Username</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' value="{{ $data->username }}" name='username' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type='email' class='form-control' value="{{ $data->email }}" name='email' id='' placeholder=''>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Role</label>
                <div class="col-md-12">
                    <select value="{{ $data->role_id }}" name="role_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Opsi</option>
                        @foreach ($role as $item)
                            <option value="{{$item->id}}" {{($data->role_id == $item->id) ? 'selected':''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Password</label>
                <small class="col-md-12 text-muted">*only for change</small>
                <div class="col-md-12">
                    <input type='password' class='form-control' value="" name='password' id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection