@extends('layouts.admin')

@section('title')
    Edit Ro
@endsection

@section('content')
    <div class='white-box'>
        <div class='row'>
            <div class='col-sm-12'>
                <h4 class='box-title'>Edit Ro</h4>
            </div>
            <form class="form-horizontal" action='{{ route('ro.update', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
                @csrf
                <div class="form-group col-md-12">
                    <div class="row m-b-5">
                        <div class="col-md-6">
                            <label for="">Kode Ro</label>
                            <input type="text" class="form-control" name="code" value="{{ $data->code }}" placeholder="Kode Ro">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama Ro</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Nama Ro">
                        </div>
                    </div>
                </div>

                <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
            </form>
        </div>
    </div>
@endsection