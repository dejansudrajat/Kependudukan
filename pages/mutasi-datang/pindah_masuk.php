<?php include('../_partials/top.php');
include('../../config/koneksi.php'); ?>

<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>
<?php 
$query = "SELECT * FROM kartu_keluarga order by id_keluarga DESC";
  $hasil = mysqli_query($db, $query);
  $jum1=mysqli_num_rows($hasil);
if ($jum1>0){
  $hasil2=mysqli_fetch_array($hasil);
  $kode1=$hasil2['id_keluarga']+1;
} else {
  $kode1=1;

} 
$query3 = "SELECT * FROM warga order by id_warga DESC";
  $hasil3 = mysqli_query($db, $query3);
  $jum=mysqli_num_rows($hasil3);
if ($jum>0){
  $hasil4=mysqli_fetch_array($hasil3);
  $kode=$hasil4['id_warga']+1;
} else {
  $kode=1;

}
?>
<h1 class="page-header" align="center">Pindah Masuk</h1>

<form action="store_datang.php" method="post">
<h3>Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td>
      <input type="text" placeholder="NO KK" class="form-control" name="nomor_keluarga" required>
  </tr>
  <tr>
    <th>Nama Kepala Keluarga</th>
    <td>:</td>
    <td>
      <input type="hidden" class="form-control input-md" name="id_keluarga" id="id_keluarga" value="<?php echo $kode1;?>" size="30" placeholder="ID warga" required/>
      <input type="hidden" class="form-control input-md" name="id_warga" id="id_warga" value="<?php echo $kode;?>" size="30" placeholder="ID warga" required/>
      <input type="text" placeholder="Nama Kepala Keluarga" class="form-control" name="nama_kepala_keluarga" required>
    </td>
</td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir_warga" required></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tanggal_lahir_warga" size="20" readonly="readonly" />
    </div>
     <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
    </td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
    <div class="form-group">
    <div class="col-md-9">
      <div class="radio">
        <label class="radio"><input type="radio" name="jk" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="jk" value="L"> Perempuan</label>
      </div>
    </div>
    </td>
  </tr>
  
</table>

<h3>Data Daerah Tujuan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Dusun</th>
    <td width="1%">:</td>
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
      <!--
      <input type="text" class="form-control" name="rt_warga" value="<?php echo $_SESSION['user']['rt_user'] ?>" readonly></td>
    -->
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="rw_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="01">01</option>
      </select>
      <!--<input type="text" class="form-control" name="rw_warga" value="<?php echo $_SESSION['user']['rw_user'] ?>" readonly></td>-->
  </tr>
</table>

<h3>Data Kepindahan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat Asal</th>
    <td width="1%">:</td>
    <td><textarea placeholder="Alamat Asal" class="form-control" name="alamat_asal"></textarea></td>
  </tr>
  <tr>
    <th>Tanggal Pindah</th>
    <td>:</td>
    <td>
      <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tanggal_pindah" size="20" readonly="readonly" />
    </div>
      <!-- <input type="text" class="form-control datepicker" name="tanggal_pindah" required> -->
    </td>
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
      <select class="form-control selectpicker" name="jenis_kepindahan" required>
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
