<?php include('../_partials/top.php') ?>

<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>
<h1 class="page-header" align="center">Detail Mutasi Keluar</h1>

<?php include('data-show.php') ?>

<h3>A. Data Pribadi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['nik_warga'] ?></td>
  </tr>
  <tr>
    <th>Nama</th>
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
    <th>Agama</th>
    <td>:</td>
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

<h3>B. Data Alamat Mutasi Keluar</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['alamat_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['desa_kelurahan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['kecamatan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['kabupaten_kota_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['provinsi_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['negara_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['dusun_mutasi'] ?></td>
  </tr>

  <tr>
    <th>RT</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rt_mutasi'] ?></td>
  </tr>

  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rw_mutasi'] ?></td>
  </tr>
</table>

<h3>C. Data Alamat Asal</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Desa / Keluarahan</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['desa_kelurahan_warga'] ?></td>
  </tr>
  <tr>
    <th width="20%">Dusun</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['dusun_warga'] ?></td>
  </tr>

  <tr>
    <th>RT</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['rt_warga'] ?></td>
  </tr>

  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['rw_warga'] ?></td>
  </tr>
  
</table>

<h3>D. Data Aplikasi</h3>
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
