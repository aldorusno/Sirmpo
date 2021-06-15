<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Pengobatan</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pengobatan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('rekam_medis/update_kunjungan') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $edit['id_berobat'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" name="tgl_berobat" value="<?= $edit['tgl_berobat']; ?>" class="form-control" id="tgl_berobat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Pasien</label>
                            <select name="pasien" id="" class="form-control" required>

                                <?php foreach ($pasien as $r) {
                                    if ($r['id_pasien'] == $edit['id_pasien']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }

                                ?>
                                    <option value="<?= $r['id_pasien']; ?>" <?= $aktif; ?>><?= $r['nama_pasien']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Dokter Tujuan</label>
                            <select name="dokter" id="" class="form-control" required>


                                <?php foreach ($dokter as $r) {
                                    if ($r['id_dokter'] == $edit['id_dokter']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }

                                ?>
                                    <option value="<?= $r['id_dokter']; ?>" <?= $aktif; ?>><?= $r['nama']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">
                            Update Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


</div>