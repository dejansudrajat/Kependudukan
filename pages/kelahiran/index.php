<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kelahiran</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Tanggal Lahir</th>
      <th>Nama Bayi</th>
      <th>Jenis Kelamin</th>
      <th>Berat Bayi</th>
      <th>Panjang Bayi</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Tempat Lahir</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_lahir as $kelahiran) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo ($kelahiran['tgl_kelahiran'] != '0000-00-00') ? date('d-m-Y', strtotime($kelahiran['tgl_kelahiran'])) : ''?></td>
      <td><?php echo $kelahiran['nama_bayi'] ?></td>
      <td><?php echo $kelahiran['jk'] ?></td>
      <td><?php echo $kelahiran['berat_bayi'] ?></td>
      <td><?php echo $kelahiran['panjang_bayi'] ?></td>
      <td><?php echo $kelahiran['nama_ayah'] ?></td>
      <td><?php echo $kelahiran['nama_ibu'] ?></td>
      <td><?php echo $kelahiran['tempat_lahir'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            
            <li class="divider"></li>
            <li>
              <a href="cetak-show.php?id_kelahiran=<?php echo $kelahiran['id_kelahiran'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
            </li>
            <?php if ($_SESSION['user']['status_user'] != 'Kasi_Pemerintahan'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_kelahiran=<?php echo $kelahiran['id_kelahiran'] ?>"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
            </li>
            <li class="divider"></li>
            <?php endif; ?>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>
<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Kelahiran</dt>
    <dd><?php echo $jumlah_kelahiran['total'] ?></dd>
  </dl>
</div>
<!--
<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Warga</dt>
    <dd><?php echo $jumlah_warga['total'] ?> orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd><?php echo $jumlah_warga_l['total'] ?> orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd><?php echo $jumlah_warga_p['total'] ?> orang</dd>

    <dt>Warga < 17 tahun</dt>
    <dd><?php echo $jumlah_warga_kd_17['total'] ?> orang</dd>

    <dt>Warga >= 17 tahun</dt>
    <dd><?php echo $jumlah_warga_ld_17['total'] ?> orang</dd>
  </dl>
</div>
-->
<?php include('../_partials/bottom.php') ?>
