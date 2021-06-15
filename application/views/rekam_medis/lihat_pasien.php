<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Pasien</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Lihat Data Pasien
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <div class="row mb-3">
                <div class="col-md-8">
                    <a href="<?= base_url('rekam_medis/tambah_pasien') ?>" class="btn btn-primary">Tambah Pasien</a>
                    <a href="<?= base_url('rekam_medis/print') ?>" class="btn btn-primary">Print</a>

                </div>
                <div class="col-md-3">
                    <div class="navbar-form navbar-right">
                        <?php echo form_open('rekam_medis/search') ?>
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
                        <th scope="col">No RM</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">No KTP</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pasien as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['no_rm']; ?></td>
                            <td><?= $row['nama_pasien']; ?></td>
                            <td><?= $row['no_ktp']; ?></td>
                            <td><?= $row['jenis_kelamin']; ?></td>
                            <td><?= $row['no_telp']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>rekam_medis/ubah_pasien/<?= $row['id_pasien']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>rekam_medis/hapus_pasien/<?= $row['id_pasien']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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