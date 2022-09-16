@extends('layouts.admin')

@section('title')
    Manage Access
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Manage Access</h4>
        </div>
        <form action='{{ route('manage-access.create') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('GET')
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <select name="role_id" id="" class="form-control">
                        <option value="" selected disabled>Pilih Role</option>
                        @foreach ($role as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type='submit' class='btn btn-primary'  style="margin-top: 10px;">Submit</button>
        </form>
    </div>
</div>
@endsection