@extends('layouts.admin')

@section('title')
    Edit Role
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit Role</h4>
        </div>
        <form class="form-horizontal" action='{{ route('role.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' value="{{$data->name}}" id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection