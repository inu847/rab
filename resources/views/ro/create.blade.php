@extends('layouts.admin')

@section('title')
    Tambah Ro
@endsection

@section('content')
    <div class='white-box'>
        <div class='row'>
            <div class='col-sm-12'>
                <h4 class='box-title'>Tambah Ro</h4>
            </div>
            <form class="form-horizontal" action='{{ route('ro.store') }}' method='POST' enctype='multipart/form-data'>
                @csrf
                <div class="form-group col-md-12">
                    <div class="row m-b-5">
                        <div class="col-md-6">
                            <label for="">Kode Ro</label>
                            <input type="text" class="form-control" name="code" placeholder="Kode Ro">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama Ro</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Ro">
                        </div>
                    </div>
                </div>

                <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
            </form>
        </div>
    </div>
@endsection