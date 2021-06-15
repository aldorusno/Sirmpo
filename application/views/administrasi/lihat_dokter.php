<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Dokter</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Lihat Data Dokter
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="<?= base_url('administrasi/tambah_dokter'); ?>" class="btn btn-primary">Tambah Dokter</a>
                    <a href="<?= base_url('administrasi/print_dokter'); ?>" class="btn btn-primary">Print</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Hari Kerja</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dokter as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jenis_kelamin']; ?></td>
                            <td><?= $row['nip']; ?></td>
                            <td><?= $row['spesialis']; ?></td>
                            <td><?= $row['hari_kerja']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['no_telp']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>administrasi/ubah_dokter/<?= $row['id_dokter']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>administrasi/hapus/<?= $row['id_dokter']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>

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