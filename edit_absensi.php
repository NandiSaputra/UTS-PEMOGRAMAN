<?php
include 'model.php';
$id = $_GET['id'];
$model = new Model();
$data = $model->edit_absen($id);
?>
<html>

<head>
  <title>EDIT ABSEN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<Body>
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fluid">
    <h1>EDIT ABSENSI</h1>
    <a href="absensi.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
      <div class="col-3">
        <div class="mb-3">
          <label class="form-label">Id Absen</label>
          <input type="text" name="idabsen" value="<?= $data->idabsen ?>" class="form-control" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">TANGGAL MASUK</label>
          <input type="date" name="tglabsen" value="<?= $data->tglabsen ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">JAM MASUK</label>
          <input type="time" name="masuk" value="<?= $data->masuk ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">JAM KELUAR</label>
          <input type="time" name="keluar" value="<?= $data->keluar ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">KODE PROGRAM STUDI</label>
          <select name="dosen" class="form-select">
            <?php
            $result = $model->tampil_dosen();
            if (!empty($result)) {
              foreach ($result as $data) : ?>
                <option value="<?= $data->kodedosen ?>"><?= $data->kodedosen ?> - <?= $data->namadosen ?></option>
            <?php endforeach;
            } ?>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">SESI</label>
          <input type="number" name="sesi" value="<?= $data->sesi ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">KELAS SESI</label>
          <input type="text" name="kelassesi" value="<?= $data->kelassesi?>" class="form-control">
        </div>
        <button type="submit" name="edit_absen" class="btn btn-success">SUBMIT</button>
        <button type="reset" class="btn btn-danger">CANCEL</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</Body>

</html>