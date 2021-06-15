<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- <div class="row"> -->
    <div class="row col-md-12">
        <div class="card border-info mb-3 mr-3" style="width: 20rem;">
            <div class="card-header bg-info text-white">
                Selamat Datang <?= $user['nama_lengkap']; ?> !
            </div>
            <div class="card-body">

                <h5 class="card-title"><?= $user['email']; ?></h5>

                <h7>No Identitas</h7>
                <p class="card-text"><?= $user['no_ktp']; ?></p>
                <h7>Jenis Kelamin</h7>
                <p class="card-text"><?= $user['jenis_kelamin']; ?></p>
                <h7>Alamat</h7>
                <p class="card-text"><?= $user['alamat']; ?></p>
                <h7>Tanggal Bergabung</h7>
                <p class="card-text"><?= date('d F Y', $user['date_created']); ?></p>


            </div>


        </div>

        <div class="card border-danger" style="width: 15rem; height:12rem;">
            <div class="card-header text-white bg-danger">Antrian Saat Ini</div>
            <div class="card-body">
                <h1 class="card-title" style="text-align:center">
                    <?= $antrian; ?>
                </h1>
                <hr>

                <a style="color:grey;" href="<?= base_url('user/tambah_antrian') ?>">Daftar</a>
                <a class="float-right" style="color:grey;" href="<?= base_url('user/lihat_antrian') ?>">Lihat Antrian</a>
            </div>
        </div>
    </div>
    <!-- </div> -->


</div>

</div>