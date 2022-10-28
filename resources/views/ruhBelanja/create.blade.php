{{-- CONTENT MODALS --}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Create Ruh Belanja</h4>
</div>
<form action="{{ route('ruhBelanja.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="kepala_rab" class="control-label">Kepala RAB</label>
            <textarea id="editor" class="editor form-control" name="kepala_rab" cols="30" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="th_anggaran" class="control-label">Tahun Anggaran</label>
            <input type="integer" id="th_anggaran" class="form-control" name="th_anggaran" placeholder="Masukkan Tahun Anggaran" required>
        </div>
        <div class="form-group">
            <label for="code_satker" class="control-label">Code</label>
            <input type="integer" id="code_satker" class="form-control" name="code_satker" placeholder="Masukkan Code" required>
        </div>
        <div class="form-group">
            <label for="name_satker" class="control-label">Judul</label>
            <input type="text" id="name_satker" class="form-control" name="name_satker" placeholder="Masukkan Judul" required>
        </div>
        <div class="form-group">
            <label for="code_kl_unit" class="control-label">Code K/L Unit</label>
            <input type="integer" id="code_kl_unit" class="form-control" name="code_kl_unit" placeholder="Masukkan Code K/L Unit" required>
        </div>
        <div class="form-group">
            <label for="name_kl_unit" class="control-label">Name K/L Unit</label>
            <input type="text" id="name_kl_unit" class="form-control" name="name_kl_unit" placeholder="Masukkan Name K/L Unit" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger waves-effect waves-light">Submit</button>
    </div>
</form>

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