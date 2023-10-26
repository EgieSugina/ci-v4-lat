<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial- scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <title>Aplikasi CRUD</title>
</head>

<body>
    <div class="notif-container "></div>

    <nav class="navbar navbar-expand-md navbar-dark fixed bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('mahasiswa') ?>">Data
                            Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('matakuliah') ?>">Data
                            Matakuliah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('isi') ?>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script>
        function konfirmasiHapus(data, id) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                // Jika pengguna mengonfirmasi, maka akan diarahkan ke URL hapus
                window.location.href = data + "/delete/" + id;
            }
        }
        $(document).ready(function () {
            var toastMessage = '<?= session()->getFlashdata('toast') ?>';
            if (toastMessage) {
                var toast = $('<div class="toast  m-4" style="position: absolute; top: 0; right: 0;z-index:100 ">')
                    .append($('<div class="toast-header">').text('Notification by D1A220400'))
                    .addClass('bg-' + (toastMessage.includes('berhasil') ? 'success' : 'error'))
                    .append($('<div class="toast-body text-white  fs-6 fw-normal">').text(toastMessage));
                $('.notif-container').append(toast);
                toast.toast('show');
            }
        });
    </script>
</body>

</html>