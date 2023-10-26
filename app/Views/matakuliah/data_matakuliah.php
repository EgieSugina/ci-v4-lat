<?php $this->extend('template/template'); ?>
<?php $this->section('isi'); ?>
<div class="container  mt-3">
    <div class="card mt-3">
        <div class="card-header">
            <b>
                <?= $title ?>
            </b>
        </div>
        <div class="card-body">
            <a href="matakuliah/tambah" class="btn btn-info">Tambah</a>
            <br><br>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Ruangan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($matakuliah as $key): ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $key['kode_mk']; ?>
                        </td>
                        <td>
                            <?php echo $key['nama_mk']; ?>
                        </td>
                        <td>
                            <?php echo $key['sks']; ?>
                        </td>
                        <td>
                            <?php echo $key['ruangan']; ?>
                        </td>
                        <td>
                            <a href="matakuliah/edit/<?php echo $key['id_mk']; ?>">Edit</a> |
                            <a href="matakuliah/delete/<?php echo $key['id_mk']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>