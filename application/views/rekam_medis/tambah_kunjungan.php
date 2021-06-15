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
                    Form Tambah Data Pengobatan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('rekam_medis/insert'); ?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" name="tgl_berobat" class="form-control" id="tgl_berobat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Pasien</label>
                            <select name="pasien" id="" class="form-control" required>
                                <option value="">Pilih</option>
                                <?php foreach ($pasien as $r) { ?>
                                    <option value="<?= $r['id_pasien']; ?>"><?= $r['nama_pasien']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Dokter Tujuan</label>
                            <select name="dokter" id="" class="form-control" required>
                                <option value="">Pilih</option>
                                <?php foreach ($dokter as $r) { ?>
                                    <option value="<?= $r['id_dokter']; ?>"><?= $r['nama']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambahkan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

</div>