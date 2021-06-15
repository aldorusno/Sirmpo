<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Dokter</h1>
    </div>

    <!-- Content Row -->

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Spesialis</th>
                <th scope="col">Hari Kerja</th>
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
                    <td><?= $row['spesialis']; ?></td>
                    <td><?= $row['hari_kerja']; ?></td>

                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                            Detail
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Dokter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <b class="card-text">Nama</b>
                                        <p><?= $row['nama']; ?></p>
                                        <b class="card-text">Jenis Kelamin</b>
                                        <p> <?= $row['jenis_kelamin']; ?></p>
                                        <b class="card-text">NIP</b>
                                        <p><?= $row['nip']; ?></p>
                                        <b class="card-text">Spesialis</b>
                                        <p><?= $row['spesialis']; ?></p>
                                        <b class="card-text">Jadwal</b>
                                        <p><?= $row['hari_kerja']; ?></p>
                                        <b class="card-text">Alamat </b>
                                        <p><?= $row['alamat']; ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php $i++;  ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>