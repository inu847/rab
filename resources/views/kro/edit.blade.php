@extends('layouts.admin')

@section('title')
    Edit Kro
@endsection

@section('content')
    <div class='white-box'>
        <div class='row'>
            <div class='col-sm-12'>
                <h4 class='box-title'>Edit Kro</h4>
            </div>
            <form class="form-horizontal" action='{{ route('kro.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
                @csrf
                <div class="form-group col-md-12">
                    <div class="row m-b-5">
                        <div class="col-md-6">
                            <label for="">Kode Kro</label>
                            <input type="text" class="form-control" name="code" value="{{ $data->code }}" placeholder="Kode Kro">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama Kro</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Nama Kro">
                        </div>
                    </div>
                </div>

                <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
            </form>
        </div>
    </div>
@endsection