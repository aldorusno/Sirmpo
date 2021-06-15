<!DOCTYPE html>
<html>

<head>

    <title>
        Sistem Informasi Rekam Medis dan Pendaftaran Online
    </title>

</head>

<body>
    <h2 style="text-align:center">BALAI KESEHATAN MATA MASYARAKAT </h2>
    <H3 style="text-align:center">KABUPATEN BANYUMAS</h3>
    <p style="text-align:center">Jalan Jenderal Soedirman No. 106, Purwokerto, Kabupaten Banyumas</p>
    <p style="text-align:center">Kode Pos 53147 Telepon: (0281) 635602</p>
    <hr size=5 style=" border: 1px solid black;">
    <h3 style="text-align:center;">Rekap Data Antrian</h3>


    <table class="table" border="1" style="width:100%;margin:auto;text-align:center; vertical-align:middle;">
        <thead style="background-color:#bfbfbf;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Antrian</th>
                <th scope="col">No Antrian</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>


            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($antrian as $row) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row['tgl_antrian']; ?></td>
                    <td><?= $row['no_antrian']; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['email']; ?></td>


                </tr>
                <?php $i++;  ?>
            <?php endforeach; ?>

    </table>
    <br><br>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Purwokerto, <?= date('d-m-Y') ?></p>

                <p><?= $user['nama_lengkap']; ?></p>
                <br><br><br><br>
                <b>_____________________<p>
                        <script type="text/javascript">
                            window.print();
                        </script>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>