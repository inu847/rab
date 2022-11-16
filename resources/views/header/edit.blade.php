@extends('layouts.admin')

@section('title')
    Edit Akun Header
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Edit Akun Header</h4>
        </div>
        <form class="form-horizontal" action='{{ route('header.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            {{-- <div class='form-group'>
                <label for='' class="col-md-12">Akun</label>
                <div class="col-md-12">
                    <select name="akun_id" class='form-control' id="">
                        <option value="" selected disabled>Pilih Akun</option>
                        @foreach ($akun as $item)
                            <option value="{{ $item->id }}" {{ ($data->akun_id == $item->id) ? 'selected':'' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class='form-group'>
                <label for='' class="col-md-12">Code</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='code' value="{{ $data->code }}" id='' placeholder='' required>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' value="{{ $data->name }}" id='' placeholder=''>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection