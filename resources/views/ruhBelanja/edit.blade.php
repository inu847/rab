@extends('layouts.admin')

@section('title')
    Edit Ruh Belanja
@endsection

@section('content')
<div class='white-box'>
    {{-- <div class='row'> --}}
        <h4 class='box-title'>Edit Ruh Belanja</h4>
        {{-- <div class='col-sm-6'>
        </div> --}}
        <form class="form-horizontal" enctype="multipart/form-data" action='{{ route('ruhBelanja.update', [$data->id]) }}' method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kepala_rab" class="control-label">Kepala RAB</label>
                <textarea  id="editor" class="editor form-control" name="kepala_rab" cols="30" rows="5" required>{{ $data->kepala_rab }}</textarea>
            </div>
            <div class="form-group">
                <label for="th_anggaran" class="control-label">Tahun Anggaran</label>
                <input type="integer" id="th_anggaran" class="form-control" value="{{ $data->th_anggaran }}" name="th_anggaran" placeholder="Masukkan Tahun Anggaran" required>
            </div>
            <div class="form-group">
                <label for="code_satker" class="control-label">Code Satker</label>
                <input type="integer" id="code_satker" class="form-control" value="{{ $data->code_satker }}" name="code_satker" placeholder="Masukkan Code Satker" required>
            </div>
            <div class="form-group">
                <label for="name_satker" class="control-label">Name Satker</label>
                <input type="text" id="name_satker" class="form-control" value="{{ $data->name_satker }}" name="name_satker" placeholder="Masukkan Name Satker" required>
            </div>
            <div class="form-group">
                <label for="code_kl_unit" class="control-label">Code K/L Unit</label>
                <input type="integer" id="code_kl_unit" class="form-control" value="{{ $data->code_kl_unit }}" name="code_kl_unit" placeholder="Masukkan Code K/L Unit" required>
            </div>
            <div class="form-group">
                <label for="name_kl_unit" class="control-label">Name K/L Unit</label>
                <input type="text" id="name_kl_unit" class="form-control" value="{{ $data->name_kl_unit }}" name="name_kl_unit" placeholder="Masukkan Name K/L Unit" required>
            </div>
            <div class="form-group">
                <label for="volume" class="control-label">Volume</label>
                <input type="text" id="volume" class="form-control" name="volume" value="{{ $data->volume }}" placeholder="Masukkan Volume" required>
            </div>
            <div class="form-group">
                <label for="satuan_ukur" class="control-label">Satuan Ukur</label>
                <input type="text" id="satuan_ukur" class="form-control" name="satuan_ukur" value="{{ $data->satuan_ukur }}" placeholder="Masukkan Satuan Ukur" required>
            </div>
            <div class="form-group">
                <label for="tgl_doc" class="control-label">Tangal Dokumen</label>
                <input type="text" id="tgl_doc" class="form-control" name="tgl_doc" value="{{ $data->tgl_doc }}" placeholder="Masukkan Tanggal Dokumen" required>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </form>
    {{-- </div> --}}
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.config.toolbar_Basic = [
            ['Bold', 'Italic', 'Underline']
        ];
        CKEDITOR.replace('editor');
    });
</script>
@endsection