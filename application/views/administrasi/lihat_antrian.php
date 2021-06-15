<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Antrian</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-12">
            <a href="<?= base_url('administrasi/tambah_antrian'); ?>" class="btn btn-primary">Tambah Antrian</a>
            <a href="<?= base_url('administrasi/print_antrian') ?>" class="btn btn-primary">Print</a>
            <a href="<?= base_url('administrasi/reset_antrian') ?>" class="btn btn-primary float-right " onclick="return confirm('Apakah yakin ingin reset antrian?');">Reset</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No. Antrian</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>


            <?php $i = 1; ?>
            <?php foreach ($antrian as $row) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row['tgl_antrian']; ?></td>
                    <td><?= $row['no_antrian']; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>

                        <a href="<?= base_url(); ?>administrasi/print/<?= $row['id_antrian']; ?>" class="badge badge-primary">print</a>
                        <a href="<?= base_url(); ?>administrasi/hapus_antrian/<?= $row['id_antrian']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                    </td>
                </tr>
                <?php $i++;  ?>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>

</div>