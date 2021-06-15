<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Dokter</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Dokter
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $dokter['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $dokter['jenis_kelamin'] ?>">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="<?= $dokter['nip'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" id="spesialis" value="<?= $dokter['spesialis'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hari Kerja</label>
                            <input type="text" name="hari_kerja" class="form-control" id="hari_kerja" value="<?= $dokter['hari_kerja'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $dokter['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?= $dokter['no_telp'] ?>">
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