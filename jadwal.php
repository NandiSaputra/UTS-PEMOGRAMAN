<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DATA JADWAL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container-fluid">
        <h1 align="center">TAMBAH DATA JADWAL</h1>
        <a href="insert_jadwal.php"> Tambah Data</a><br>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>JADWAL ID</th>
                    <th>KODE DOSEN</th>
                    <th>HARI</th>
                    <th>TAHUN AKADEMIK</th>
                    <th>SEMESTER</th>
                    <th>KODE MATAKULIAH</th>
                    <th>SESI</th>
                    <th>JAM MASUK</th>
                    <th>JAM KELUAR</th>
                    <th>KELAS</th>
                    <th>RUANG</th>
                    <th>STATUS</th>
                    <th>KELAS SESI</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_jadwal();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id ?></td>
                            <td><?= $data->jadwalid ?></td>
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->hari ?></td>
                            <td><?= $data->thnakademik ?></td>
                            <td><?= $data->semester ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->jammasuk ?></td>
                            <td><?= $data->jamkeluar ?></td>
                            <td><?= $data->kelas ?></td>
                            <td><?= $data->ruang ?></td>
                            <td><?= $data->status ?></td>
                            <td><?= $data->kelassesi ?></td>

                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <center>
                            <td colspan="15">
                                <center>DATA MASIH KOSONG!!!! </center>
                            </td>
                        </center>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>