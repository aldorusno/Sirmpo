<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Profil</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Profil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Identitas</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?= $user['no_ktp'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $user['nama_lengkap'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $user['jenis_kelamin'] ?>">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $user['alamat'] ?>">
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