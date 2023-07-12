<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Aset</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-create.php') ?>

<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control selectlive" name="id_aset_keluarga" required>
        <option value="" selected disabled>- pilih -</option>
        <?php foreach ($data_kartu_keluarga as $kartu_keluarga) : ?>
        <option value="<?php echo $kartu_keluarga['id_keluarga'] ?>">
          <?php echo $kartu_keluarga['nomor_keluarga'] ?>
        </option>
        <?php endforeach ?>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Kekayaan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Jumlah Motor</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="motor_keluarga"></textarea></td>
  </tr>
  <tr>
    <th>Jumlah Mobil</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="mobil_keluarga" required></td>
  </tr>
  <tr>
    <th>Jumlah Kekayaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kekayaan_keluarga" required></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
