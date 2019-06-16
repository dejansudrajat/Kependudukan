<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>
<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>

<h3>A. Data KK</h3>
<?php
if($data_kk[]=!NULL){
 ?> 
<table class="table table-striped">
  <tr>
    <th width="20%">No KK</th>
    <td width="1%">:</td>
    <td><?php echo $data_kk[0]['nomor_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['alamat_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><?php echo "-" ?></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>
      <?php echo ($data_kk[0]['rt_keluarga'] )?>
    </td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['rw_keluarga'] ?></td>
  </tr>
</table>
<?php } ?>
<h3>B. Data Pribadi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['nik_warga'] ?></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
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
    <td>
      <?php echo ($data_warga[0]['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($data_warga[0]['tanggal_lahir_warga'])) : ''?>
    </td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></td>
  </tr>
</table>

<h3>C. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['alamat_ktp_warga'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['alamat_warga'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
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
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['desa_kelurahan_warga'] ?></td>
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

</table>

<h3>D. Data Lain-lain</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
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

<h3>E. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td><?php echo $data_warga[0]['id_user'] ?></td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['created_at'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_warga[0]['updated_at'] ?></td>
  </tr>
</table>

<?php include('../_partials/bottom.php') ?>
