<form action="<?= site_url("../pengaturan/tambahData"); ?>" method="post">
    <div class="modal-body">
        <div class="form-group">
            <label>Nama Data</label>
            <input type="text" class="form-control" placeholder="Nama Data" name="nama_data">
        </div>
        <div class="form-group">
            <label>Alias</label>
            <input type="text" class="form-control" placeholder="Alias" name="alias">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>