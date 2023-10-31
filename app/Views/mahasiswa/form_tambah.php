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
                base_url('mahasiswa/simpan') ?>" method="post">
                <div class="col-6">
                    <label class="form-label">NPM</label> <input type="text" name="nim" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">No Handphone</label> <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="col-12">
                    <a href="<?php echo base_url('mahasiswa') ?>" type="submit" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('isi'); ?>