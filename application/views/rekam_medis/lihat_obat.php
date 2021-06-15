<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Obat</h1>
    </div>

    <div class="card">
        <div class="card-header">
            Lihat Data Obat
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <div class="row mb-3">
                <div class="col-md-8">
                    <a href="<?= base_url('rekam_medis/tambah_obat') ?>" class="btn btn-primary">Tambah Obat</a>
                    <a href="<?= base_url('rekam_medis/print_obat') ?>" class="btn btn-primary">Print</a>
                </div>
                <!-- Search -->
                <div class="col-md-3">
                    <div class="navbar-form navbar-right">
                        <?php echo form_open('rekam_medis/search_obat') ?>
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
                        <th scope="col">Kode Obat</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($obat as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['kode']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jumlah']; ?></td>
                            <td><?= $row['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>rekam_medis/ubah_obat/<?= $row['id_obat']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>rekam_medis/hapus/<?= $row['id_obat']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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