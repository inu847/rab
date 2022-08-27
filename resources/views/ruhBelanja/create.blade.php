{{-- CONTENT MODALS --}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Create Ruh Belanja</h4>
</div>
<form action="{{ route('ruhBelanja.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal-body">
        <div class="form-group">
            <label for="th_anggaran" class="control-label">Tahun Anggaran</label>
            <input type="integer" id="th_anggaran" class="form-control" name="th_anggaran" placeholder="Masukkan Tahun Anggaran" required>
        </div>
        <div class="form-group">
            <label for="code_satker" class="control-label">Code Satker</label>
            <input type="integer" id="code_satker" class="form-control" name="code_satker" placeholder="Masukkan Code Satker" required>
        </div>
        <div class="form-group">
            <label for="name_satker" class="control-label">Name Satker</label>
            <input type="text" id="name_satker" class="form-control" name="name_satker" placeholder="Masukkan Name Satker" required>
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