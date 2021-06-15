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
    <h3 style="text-align:center;">Hasil Pemeriksaan</h3>
    <?php foreach ($berobat as $row) : ?>

        <table style="float: left;margin-left:20px;" border=" 0">
            <tr>
                <td>
                    <b>No. Rekam Medis</b>
                <td>
                    <p>: <?= $row['no_rm']; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Nama </b>
                <td>
                    <p>: <?= $row['nama_pasien']; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Tanggal </b>
                <td>
                    <p>: <?= $row['tgl_berobat']; ?></p>
                </td>
            </tr>
        </table>


        <table style="float: left; margin-left:100px;" border="0">
            <tr>
                <td>
                    <b>Dokter</b>
                <td>
                    <p>: <?= $row['nama']; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Penatalaksanaan </b>
                <td>
                    <p>: <?= $row['penatalaksanaan']; ?></p>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
    <br><br><br><br>
    <br><br><br><br>
    <br>


    <br>
    <hr>
    <br>
    <b style="float:left;margin-left:20px; margin-top:3px;margin-right:40px">Keluhan</b>
    <p style="float:left;margin-left:22px; margin-top:3px;"> : </p>
    <table style="float-left;margin-left:20px"> <?php foreach ($berobat as $r) : ?>
            <tr>
                <td><?= $r['keluhan_pasien']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <b style="float:left;margin-left:20px; margin-top:3px;margin-right:40px">Hasil</b>
    <p style="float:left;margin-left:45px; margin-top:3px;"> : </p>
    <table style="float-left;margin-left:20px"> <?php foreach ($berobat as $r) : ?>
            <tr>
                <td><?= $r['hasil_diagnosa']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </table>
    <br>

    <hr>
    <br>
    <b style="float:left;margin-left:20px; margin-top:3px;margin-right:40px">Resep obat</b>
    <p style="float:left;margin-left:6px; margin-top:3px;"> : </p>
    <table style="float-left;margin-left:20px"> <?php foreach ($resep as $r) : ?>
            <tr>
                <td><?= $r['nama']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br>
    <table style="float: right; ">
        <tr>
            <td>
                <p>Purwokerto, <?= date('d-m-Y') ?></p>

                <p>Pemeriksa</p>
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