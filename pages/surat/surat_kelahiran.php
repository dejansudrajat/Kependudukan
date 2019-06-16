<?php include('../_partials/top.php') ?>

<?php include('list_keluarga.php') ?>
<h1 class="page-header">Keterangan Kelahiran</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>DATA KELUARGA</h3>

  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">No.KK / Nama Kepala Keluarga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="nama_kepala_keluarga" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_keluarga as $keluarga) : ?>
          <option value="<?php echo $keluarga['nomor_keluarga'] ?>">
            <?php echo $keluarga['nomor_keluarga'] ?> <?php echo $keluarga['nama_warga']?>
          </option>
          <?php endforeach ?>
          </select>
        </select>
      </td>
    </tr>
</table>

<h3>BAYI/ANAK</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="Nama Bayi" class="form-control" name="nama_anak" required></td>
  </tr>
  <tr>
    <th>Tempat dilahirkan</th>
    <td>:</td>
    <td><input type="text" placeholder="Tempat dilahirkan" class="form-control" name="tempat_lahir_anak" required></td>
  </tr>
  <tr>
    <th>Tanggal Kelahiran</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_lahir_anak" required></td>
  </tr>
  </tr>
    <tr>
    <th>Pukul</th>
    <td>:</td>
    <td><input type="text" placeholder="Jam " class="form-control" name="jam_lahir_anak" required></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_kelamin_anak" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Jenis Kelahiran</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_kelahiran" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="tunggal">Tunggal</option>
        <option value="kembar2">Kembar 2</option>
        <option value="kembar3">Kembar 3</option>
        <option value="kembar4">Kembar 4</option>
      </select>
    </td>
  </tr>
    <tr>
    <th>Kelahiran Ke</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="urutan_kelahiran" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="l">l</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </td>
  </tr>

  <tr>
    <th>Penolong Kelahiran</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="penolong_kelahiran" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="dokter">Dokter</option>
        <option value="bidan">Bidan</option>
        <option value="dukun">Dukun</option>
        <option value="lainnya">Lainnya</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Berat Bayi</th>
    <td>:</td>
    <td><input type="text" placeholder="Kg" class="form-control" name="berat_anak" required></td>
  </tr>
  </tr>
    <tr>
    <th>Panjang Bayi</th>
    <td>:</td>
    <td><input type="text" placeholder="Cm" class="form-control" name="panjang_anak" required></td>
  </tr>

</table>

<h3>IBU</h3>
<table class="table table-striped table-middle">
    <tr>
      <th width="20%">NIK / Nama Ibu</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_ibu" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_ibu as $ibu) : ?>
          <option value="<?php echo $ibu['id_warga'] ?>">
            <?php echo $ibu['nik_warga'] ?> <?php echo $ibu['nama_warga']?>
          </option>
          <?php endforeach ?>
          </select>
        </select>
      </td>
    </tr>

    <!--
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
  <tr>
    <th>Kewarganegaraan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="kewarganegaraan_ibu" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
      </select>
    </td>
  </tr>
  -->
</table>

<h3>AYAH</h3>
<table class="table table-striped table-middle">
  <tr>
      <th width="20%">NIK / Nama Ayah</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_ayah" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_ayah as $ayah) : ?>
          <option value="<?php echo $ayah['id_warga'] ?>">
            <?php echo $ayah['nik_warga'] ?> <?php echo $ayah['nama_warga']?>
          </option>
          <?php endforeach ?>
          </select>
        </select>
      </td>
    </tr>

    <!--
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
  <tr>
    <th>Kewarganegaraan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="kewarganegaraan_ayah" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
      </select>
    </td>
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
