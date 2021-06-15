<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Obat</h1>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-header">
                    Form Tambah Obat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kode Obat</label>
                            <input type="text" name="kode" class="form-control" id="kode">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Obat</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stok</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Satuan</label>
                            <select class="form-control" name="keterangan" id="keterangan">
                                <option>Butir</option>
                                <option>Botol</option>
                                <option>Dus</option>
                                <option>Kaleng</option>
                                <option>Lembar</option>
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