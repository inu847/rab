@extends('layouts.admin')

@section('title')
    Buat Akun Header
@endsection

@section('content')
<div class='white-box'>
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Akun Header</h4>
        </div>
        <form class="form-horizontal" action='{{ route('header.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            {{-- <div class='form-group'>
                <label for='' class="col-md-12">Akun</label>
                <div class="col-md-12">
                    <select name="akun_id" class='form-control' id="" required>
                        <option value="Uang Harian">Pilih Akun</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class='form-group'>
                <label for='' class="col-md-12">Code</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='code' id='' placeholder='' required>
                </div>
            </div>
            <div class='form-group'>
                <label for='' class="col-md-12">Nama</label>
                <div class="col-md-12">
                    <input type='text' class='form-control' name='name' id='' placeholder='' required>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</div>
@endsection