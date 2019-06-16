<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>
<?php include('_partials/menu.php') ?>
<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>
<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nik_warga" required></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_warga" required></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
    <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tgl_kelahiran" size="20" readonly="readonly" />
    </div>
    <span class="help-block"> 
    </span>
    </div>
    </div>
 </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin_warga" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin_warga" value="L"> Perempuan</label>
  </div>
  </td>
  </tr>
</table>
<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_ktp_warga" required></textarea></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" name="alamat_warga" required></textarea></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="dusun_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Dukuh">Dukuh</option>
        <option value="Tarikolot">Tarikolot</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="rt_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
      </select>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="rw_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="01">01</option>
      </select>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_warga" value="<?php echo $_SESSION['user']['desa_kelurahan_user'] ?>"></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_warga" value="<?php echo $_SESSION['user']['kecamatan_user'] ?>"></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_warga" value="<?php echo $_SESSION['user']['kabupaten_kota_user'] ?>"></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_warga" value="<?php echo $_SESSION['user']['provinsi_user'] ?>"></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_warga" value="<?php echo $_SESSION['user']['negara_user'] ?>"></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control selectlive" name="agama_warga" required>
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
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="pendidikan_terakhir_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Tidak Sekolah">Tidak Sekolah</option>
        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan_warga"></td>
  </tr>
  <tr>
    <th>Status Penduduk</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Tinggal Tetap">Tinggal Tetap</option>
        <option value="Meninggal">Meninggal</option>
        <option value="Pindah Datang">Pindah Datang</option>
        <option value="Pindah Keluar">Pindah Keluar</option>
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
