<?php include('../_partials/top.php') ?>

<h1 class="page-header">Keterangan Kematian</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>DATA KELUARGA</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Kepala Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nama kepala keluarga" class="form-control" name="nama_kepala_keluarga" required></td>
  </tr>
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nik kepala keluarga" class="form-control" name="no_kartu_keluarga" required></td>
  </tr>
</table>

<h3>JENAZAH</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_jenazah" required></td>
  </tr>
  <tr>
    <th width="20%">Nama</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_jenazah" required></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_kelamin_jenazah" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" placeholder="tempat lahir" class="form-control" name="tempat_lahir_jenazah" required></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_lahir_jenazah" required></td>
  </tr>
  <tr>
    <th>Agama</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="agama_jenazah" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan_jenazah" required></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" placeholder="alamat" name="alamat_jenazah" required></textarea></td>
  </tr>
  <tr>
    <th>Anak Ke</th>
    <td>:</td>
    <td><input type="text" placeholder="anak ke" class="form-control" name="urutan_anak" required></td>
  </tr>
  <tr>
    <th>Tanggal Kematian</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_kematian_jenazah" required></td>
  </tr>
  <tr>
    <th>Pukul</th>
    <td>:</td>
    <td><input type="text" placeholder="jam meninggal" class="form-control" name="waktu_kematian" required></td>
  </tr>
  <tr>
    <th>Sebab Kematian</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="sebab_kematian" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Sakit Biasa / Tua">Sakit Biasa / Tua</option>
        <option value="Wabah Penyakit">Wabah Penyakit</option>
        <option value="Kecelakaan">Kecelakaan</option>
        <option value="Kriminalitas">Kriminalitas</option>
        <option value="Bunuh diri">Bunuh diri</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Tempat Kematian</th>
    <td>:</td>
    <td><input type="text" placeholder="tempat kematian" class="form-control" name="tempat_kematian" required></td>
  </tr>
    <tr>
    <th>Yang Menerangkan</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="menerangkan_kematian" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Dokter">Dokter</option>
        <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
        <option value="Kepolisian">Kepolisian</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </td>
  </tr>

</table>

<h3>IBU</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nik ibu" class="form-control" name="nik_ibu" required></td>
  </tr>
  <tr>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama ibu" class="form-control" name="nama_ibu" required></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_lahir_ibu" required></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" placeholder="pekerjaan ibu" class="form-control" name="pekerjaan_ibu" required></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" placeholder="alamat" name="alamat_ibu" required></textarea></td>
  </tr>
</table>

<h3>AYAH</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nik ayah" class="form-control" name="nik_ayah" required></td>
  </tr>
  <tr>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama ayah" class="form-control" name="nama_ayah" required></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_lahir_ayah" required></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" placeholder="pekerjaan ayah" class="form-control" name="pekerjaan_ayah" required></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" placeholder="alamat" name="alamat_ayah" required></textarea></td>
  </tr>
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
