<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Pengobatan</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Lihat Data Pengobatan
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <div class="row mb-3">
                <div class="col-md-8">
                    <a href="<?= base_url('rekam_medis/tambah_kunjungan') ?>" class="btn btn-primary"> Tambah Data Pengobatan</a>
                    <a href="<?= base_url('rekam_medis/print_kunjungan') ?>" class="btn btn-primary">Print</a>
                </div>
                <!-- Search -->
                <div class="col-md-3">
                    <div class="navbar-form navbar-right">
                        <?php echo form_open('rekam_medis/search_berobat') ?>
                        <input type="text" name="keyword" class="form-control" placeholder="Search">

                    </div>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-success ">Cari</button>
                    <?php echo form_close() ?>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nomor RM</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Rekam Medis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kunjungan as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['tgl_berobat']; ?></td>
                            <td><?= $row['no_rm']; ?></td>
                            <td><?= $row['nama_pasien']; ?></td>
                            <td><?= $row['nama']; ?></td>


                            <td><a href="<?= base_url(); ?>rekam_medis/rekam/<?= $row['id_berobat']; ?>" class="btn btn-primary btn-sm">Rekam</a></td>
                            <td>
                                <a href="<?= base_url(); ?>rekam_medis/print_berobat/<?= $row['id_berobat']; ?>" class="badge badge-info">print</a>
                                <a href="<?= base_url(); ?>rekam_medis/ubah_kunjungan/<?= $row['id_berobat']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>rekam_medis/hapus_kunjungan/<?= $row['id_berobat']; ?>" class="badge badge-danger" onclick="return confirm('Apakah yakin ingin menghapus?');">delete</a>
                            </td>
                        </tr>
                        <?php $i++;  ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>