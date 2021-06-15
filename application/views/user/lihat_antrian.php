<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Antrian</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="<?= base_url('user/tambah_antrian'); ?>" class="btn btn-primary">Daftar Antrian</a>

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
            <?php foreach ($antrian->result_array() as $row) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row['tgl_antrian']; ?></td>
                    <td><?= $row['no_antrian']; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>user/print_antrian/<?= $row['id_antrian']; ?>" class="badge badge-primary">print</a>
                        <a href="<?= base_url(); ?>user/hapus_antrian/<?= $row['id_antrian']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus antrian?');">delete</a>
                    </td>
                </tr>
                <?php $i++;  ?>
            <?php endforeach; ?>

        </tbody>
    </table>
    <b style="color:red;">Note : Silahkan daftar antrian terlebih dahulu jika tabel kosong</b>

</div>

</div>