<?php include('../_partials/top.php') ?>

<h1 class="page-header">Formulir Permohonan KK Baru</h1>
<?php include('_partials/menu.php') ?>
<?php include('list_keluarga.php') ?>
<form action="store.php" method="post">

<h3>DATA PEMOHON KK BARU</h3>
<table class="table table-striped table-middle">
    <tr>
      <th width="20%">NIK / Nama Pemohon</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
  <tr>
    <th>No KK Semula</th>
    <td>:</td>
    <td><input type="text" placeholder="no kk semula" class="form-control" name="no_kk_lama" required></td>
  </tr>
  <!--
  <tr>
    <th>Alamat Pemohon</th>
    <td>:</td>
    <td><textarea class="form-control" placeholder="alamat" name="alamat_pemohon" required></textarea></td>
  </tr>

  -->
  <tr>
    <th>Alasan Pemohon</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="alasan_pemohon" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Membentuk Keluarga Baru">Membentuk Keluarga Baru</option>
        <option value="Kartu Keluarga Hilang/Rusak">Kartu Keluarga Hilang/Rusak</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Jumlah Anggota Keluarga</th>
    <td>:</td>
    <td><input type="text" placeholder="jumlah anggora keluarga" class="form-control" name="jumlah_anggota_keluarga" required></td>
  </tr>
</table>
<h3>DAFTAR ANGGOTA KELUARGA PEMOHON(hanya diisi anggota keluarga)</h3>
<table class="table table-striped table-middle">
<tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
<tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
<tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
 <tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
 <tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
<tr>
      <th width="20%">NIK / Nama </th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_pemohon" required>
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
<!--
<tr>
    <th>NIK</th>
    <td>:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota6" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota6" required></td>
  </tr>
  -->
</table>


<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="reset" class="btn btn-warning">
  <i class="fa fa-repeat 
 "></i> Reset
</button>
</form>

<?php include('../_partials/bottom.php') ?>
