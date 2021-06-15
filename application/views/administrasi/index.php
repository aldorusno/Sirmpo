<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row col-md-12">
        <div class="card  border-info mb-3 mr-3" style="width: 15rem;">
            <div class="card-header bg-info text-white">Antrian Saat Ini</div>
            <div class="card-body">
                <h1 class="card-title" style="text-align:center"><?= $antrian; ?></h1>
                <hr>

                <a style="color:grey;" href="<?= base_url('administrasi/tambah_antrian') ?>">Tambah Antrian</a>
                <a class="float-right" style="color:grey;" href="<?= base_url('administrasi/print_antrian') ?>">Print</a>
            </div>
        </div>

        <div class="card  border-danger mb-3" style="width: 15rem;">
            <div class="card-header bg-danger text-white">Jumlah Dokter</div>
            <div class="card-body ">
                <h1 class="card-title" style="text-align:center"><?= $this->db->count_all('dokter'); ?></h1>
                <hr>

                <a style="color:grey;" href="<?= base_url('administrasi/tambah_dokter') ?>">Tambah Dokter</a>
                <a class="float-right" style="color:grey;" href="<?= base_url('administrasi/print_dokter') ?>">Print</a>
            </div>
        </div>
    </div>

</div>


</div>