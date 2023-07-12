<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Aset</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor KK</th>
            <th>Jumlah Motor</th>
            <th>Jumlah Mobil</th>
            <th>Jumlah Kekayaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php foreach ($data_aset as $aset): ?>
            <tr>
                <td>
                    <?php echo $nomor++ ?>.
                </td>
                <td><?php echo $aset['nomor_keluarga'] ?></td>
                <td>
                    <?php echo $aset['jumlah_motor'] ?>
                </td>
                <td>
                    <?php echo $aset['jumlah_mobil'] ?>
                </td>
                <td>
                    <?php echo $aset['jumlah_kekayaan'] ?>
                </td>
                <td>
                    <!-- Single button -->
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="true">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="show.php?id_aset=<?php echo $aset['id_aset'] ?>"><i
                                        class="glyphicon glyphicon-sunglasses"></i> Detail</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="edit.php?id_aset=<?php echo $aset['id_aset'] ?>"><span
                                        class="glyphicon glyphicon-edit"></span> Ubah</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="delete.php?id_aset=<?php echo $aset['id_aset'] ?>"
                                    onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="glyphicon glyphicon-trash"></i> Hapus
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
