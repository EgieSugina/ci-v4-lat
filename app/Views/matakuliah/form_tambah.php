<?php $this->extend('template/template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header"> <b>
                <?= $title ?>
            </b>
        </div>
        <div class="card-body">
            <form class="row g-3" action="<?php echo
                base_url('matakuliah/simpan') ?>" method="post">
                <div class="col-6">
                    <label class="form-label">Kode Matakuliah</label> <input type="text" name="kode_mk"
                        class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">Nama Matakuliah</label>
                    <input type="text" name="nama_mk" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">SKS</label>
                    <input type="text" name="sks" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">Ruangan</label> <input type="text" name="ruangan" class="form-control">
                </div>
                <div class="col-12">
                    <a href="<?php echo base_url('matakuliah') ?>" type="submit" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('isi'); ?>