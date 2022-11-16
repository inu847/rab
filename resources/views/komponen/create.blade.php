@extends('layouts.admin')

@section('title')
    Tambah Komponen
@endsection

@section('content')
    <div class='white-box'>
        <div class='row'>
            <div class='col-sm-12'>
                <h4 class='box-title'>Tambah Komponen</h4>
            </div>
            <form class="form-horizontal" action='{{ route('komponen.store') }}' method='POST' enctype='multipart/form-data'>
                @csrf
                <div class="form-group col-md-12">
                    <div class="row m-b-5">
                        <div class="col-md-6">
                            <label for="">Kode Komponen</label>
                            <input type="text" class="form-control" name="code" placeholder="Kode Komponen">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama Komponen</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Komponen">
                        </div>
                    </div>
                </div>

                <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
            </form>
        </div>
    </div>
@endsection