@extends('layouts.admin')

@section('title')
    Create RSPP
@endsection

@section('content')

<div class="white-box">
    <h4 style="color: #0078bc;">RUH BELANJA</h4>
    <table class="table">
        <tr>
            <th>Tahun Anggaran</th>
            <td>{{ $data->th_anggaran }}</td>
        </tr>
        <tr>
            <th>Code Satker</th>
            <td>{{ $data->code_satker }}</td>
        </tr>
        <tr>
            <th>Name Satker</th>
            <td>{{ $data->name_satker }}</td>
        </tr>
        <tr>
            <th>Code K/L Unit</th>
            <td>{{ $data->code_kl_unit }}</td>
        </tr>
        <tr>
            <th>Name K/L Unit</th>
            <td>{{ $data->name_kl_unit }}</td>
        </tr>
    </table>
</div>

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Akun</h4>
        </div>
        <table class="table table-responsive table-bordered table-striped">
            <thead style="background-color: #a7a7a7;">
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach (akun($data->id) as $item)
                    <tr>
                        <td>{{ $item->akun->code }}</td>
                        <td>{{ $item->akun->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Akun</h4>
        </div>
        <form class="form-horizontal" action='{{ route('akun-ruh-belanja.store') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <table class="table table-responsive table-bordered table-striped">
                <tbody id="table-akun"></tbody>
            </table>
            <div class="m-t-5 m-b-5">
                <button type='submit' class='btn btn-primary'>Submit</button>
                <button type="button" id="addAKun" class="btn btn-info"><i class="icon-plus"></i> Tambah Akun</button>
            </div>
        </form>
    </div>
</div>

@endsection
@if ($data->rspp)
    <script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        $(document).on('click', '#addAKun', function () {
            elem = `<tr>
                        <td>
                            <select name="akun_id[]" class="form-control" id="">
                                @foreach ($akun as $item)
                                    <option value="{{ $item->id }}">{{ $item->code."-".$item->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="ruh_belanja_id[]" value="{{ $data->id }}" id="">
                        </td>
                    </tr>`;
            $('#table-akun').append(elem);
        })
    </script>
@endif