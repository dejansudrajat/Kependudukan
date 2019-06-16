<?php include('../_partials/top.php') ?>

<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>

<h1 class="page-header" align="center">Detai Mutasi Datang</h1>

<?php include('data-show.php') ?>

<h3>A. Data Pribadi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['nik_warga'] ?></td>
  </tr>
  <tr>
    <th>Nama Mutasi</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['nama_warga'] ?></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['tempat_lahir_warga'] ?></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['tanggal_lahir_warga'] ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></td>
  </tr>
    <tr>
    <th width="">Agama</th>
    <td width="">:</td>
    <td><?php echo $data_warga[0]['agama_warga'] ?></td>
  </tr>
  <tr>
    <th>Pendidikan</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['pekerjaan_warga'] ?></td>
  </tr>

  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['status_warga'] ?></td>
  </tr>
</table>

<h3>B. Mutasi Datang Ke </h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Desa / Kelurahan</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['desa_kelurahan_warga'] ?></td>
<!--
  </tr>
    <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['kecamatan_warga'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['kabupaten_kota_warga'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['provinsi_warga'] ?></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['negara_warga'] ?></td>
  </tr>
-->
  <tr>
    <th width="20%">Dusun</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['dusun_masuk'] ?></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rt_masuk'] ?></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rw_masuk'] ?></td>
  </tr>
  <tr>
    <th>Tanggal Pindah</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['tanggal_pindah'] ?></td>
  </tr>
    <tr>
    <th>Alasan Pindah</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['alasan_pindah'] ?></td>
  </tr>
  <tr>
    <th>Jenis Kepindahan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['jenis_kepindahan'] ?></td>
  </tr>
  <tr>
    <th width="20%">Alamat Sebelum Mutasi</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['alamat_asal'] ?></td>
  </tr>

</table>

<h3>C. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['id_user'] ?></td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['created_at'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['updated_at'] ?></td>
  </tr>
</table>

<?php include('../_partials/bottom.php') ?>
