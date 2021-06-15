<!-- Begin Page Content -->
<div class="container-fluid">

    <table class="table" border="1" style="width:40%;margin:left;text-align:center; vertical-align:middle;">
        <thead>
            <tr>
                <th scope="col">
                    <h3>SELAMAT DATANG</h3>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Lambang_Kabupaten_Banyumas.png" style="width:100px;height:100px;">
                    <h4 style="text-align:center">BALAI KESEHATAN MATA MASYARAKAT </h4>
                    <H4 style="text-align:center">KABUPATEN BANYUMAS</h3>
                        <h6 style="text-align:center">Jalan Jenderal Soedirman No. 106, Purwokerto, Kabupaten Banyumas</h6>
                        <h6 style="text-align:center">Kode Pos 53147 Telepon: (0281) 635602</h6>
                </th>

            </tr>
        </thead>
        <tbody>


            <?php foreach ($antrian->result_array() as $row) : ?>
                <tr>
                    <td>
                        <h2></h2>
                        <h2>No Antrian</h2>
                        <h1 style=font-size:50px><?= $row['no_antrian']; ?></h1>
                    </td>
                </tr>

                <tr>

                    <td>
                        <h2>Atas Nama</h2>
                        <h4><?= $row['nama_lengkap']; ?></h4>
                        <h4><?= $row['email']; ?></h4>
                    </td>

                <tr>

                    <td>
                        <h2>Tanggal</h2>
                        <h4><?= $row['tgl_antrian']; ?></h4>
                    </td>
                </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<script type="text/javascript">
    window.print();
</script>