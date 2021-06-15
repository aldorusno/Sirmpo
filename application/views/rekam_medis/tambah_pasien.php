<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Pasien</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-header">
                    Form Tambah Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Rekam Medis</label>
                            <input type="text" name="no_rm" class="form-control" id="no_rm">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Pasien</label>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Identitas</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal">
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