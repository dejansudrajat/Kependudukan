<?php include('../_partials/top.php') ?>

<h1 class="page-header">Formulir Permohonan KK Baru</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">

<h3>DATA DAERAH ASAL</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nomor kartu keluarga" class="form-control" name="no_kk" required></td>
  </tr>
  <tr>
    <th width="20%">Nama Kepala Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nama kepala keluarga" class="form-control" name="nama_kepala_keluarga" required></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" placeholder="alamat" name="alamat_kk" required></textarea></td>
  </tr>
 <tr>
    <th>NIK Pemohon</th>
    <td>:</td>
    <td><input type="text" placeholder="nik pemohon" class="form-control" name="nik_pemohon" required></td>
  </tr>
  <tr>
    <th width="20%">Nama Pemohon</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nama pemohon" class="form-control" name="nama_pemohon" required></td>
  </tr>
</table>
<h3>DAFTAR ANGGOTA KELUARGA PEMOHON(hanya diisi anggota keluarga)</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="5%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota1" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota1" required></td>
  </tr>
  <tr>
    <th >NIK</th>
    <td >:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota2" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota2" required></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota3" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota3" required></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota4" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota4" required></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota5" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota5" required></td>
  </tr>
    <tr>
    <th>NIK</th>
    <td>:</td>
    <td><input type="text" placeholder="nik" class="form-control" name="nik_anggota6" required></td>
    <th>Nama Lengkap</th>
    <td>:</td>
    <td><input type="text" placeholder="nama" class="form-control" name="nama_anggota6" required></td>
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
