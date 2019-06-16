<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kematian</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Tanggal Kematian</th>
      <th>Nama </th>
      <th>Jenis Kelamin</th>
      <th>Sebab</th>
      <th>Tempat Kematian</th>
      <th>Nama Pelapor</th>
      <th>Hubungan Pelapor</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_kematian as $kematian) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo ($kematian['tgl_meninggal'] != '0000-00-00') ? date('d-m-Y', strtotime($kematian['tgl_meninggal'])) : ''?></td>
      <td><?php echo $kematian['nama_warga'] ?></td>
      <td><?php echo $kematian['jenis_kelamin_warga'] ?></td>
      <td><?php echo $kematian['sebab'] ?></td>
      <td><?php echo $kematian['tempat_kematian'] ?></td>
      <td><?php echo $kematian['nama_pelapor'] ?></td>
      <td><?php echo $kematian['hubungan_pelapor'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            
            <li class="divider"></li>
            <li>
              <a href="cetak-show.php?id_kematian=<?php echo $kematian['id_meninggal'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
            </li>
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_kematian=<?php echo $kematian['id_meninggal'] ?>"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
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
    <dt>Total Kematian</dt>
    <dd><?php echo $jumlah_kematian['total'] ?></dd>
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
