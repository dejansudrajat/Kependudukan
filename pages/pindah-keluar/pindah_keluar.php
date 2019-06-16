<?php include('../_partials/top.php') ?>

<h1 class="page-header">Pindah Keluar</h1>
<?php include('_partials/menu.php') ?>

<?php include('list_keluarga.php') ?>
<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>

<form action="store_keluar.php" method="post">
<h3>Data Pribadi</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">No.KK / Nama Kepala Keluarga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_keluarga" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_keluarga as $keluarga) : ?>
          <option value="<?php echo $keluarga['id_keluarga'] ?>">
            <?php echo $keluarga['nomor_keluarga'] ?> <?php echo $keluarga['nama_warga']?>
          </option>
          <?php endforeach ?>
          </select>
        </select>
      </td>
    </tr>
    <tr>
      <th width="20%">NIK / Nama Pemohon</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_warga" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['id_warga'] ?>">
            <?php echo $warga['nik_warga'] ?> <?php echo $warga['nama_warga']?>
          </option>
          <?php endforeach ?>
          </select>
        </select>
      </td>
    </tr>
</table>

<h3>Data Daerah Tujuan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_mutasi"></textarea></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_mutasi" required></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_mutasi" required></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_mutasi" required></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_mutasi" required></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_mutasi" required></td>
  </tr>
    <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="dusun_mutasi" required></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_mutasi" required></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_mutasi" required></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kode_pos_mutasi"></td>
  </tr>
</table>

<h3>Data Kepindahan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Tanggal Pindah</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_pindah" required></td>
  </tr>
  <tr>
    <th>Alasan Pindah</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="alasan_pindah" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Pekerjaan">Pekerjaan</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Keamanan">Keamanan</option>
        <option value="Kesehatan">Kesehatan</option>
        <option value="Perumahan">Perumahan</option>
        <option value="Keluarga">Keluarga</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Jenis Kepindahan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_pindah" required>
      <!--
        <option value="" selected disabled>- pilih -</option>
        <option value="Kep.Keluarga">Kep.Keluarga</option>
        <option value="Kep.Keluarga dan Seluruh Angota">Kep.Keluarga dan Seluruh Angota</option>
      -->
        <option value="Anggota Keluarga" default>Anggota Keluarga</option>

      </select>
    </td>
  </tr>
</table>

<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="button" class="btn btn-danger" onclick="javascript:history.back();">
  <i class="fa fa-arrow-circle-left"></i> Batal
</button>
</form>

<?php include('../_partials/bottom.php') ?>
