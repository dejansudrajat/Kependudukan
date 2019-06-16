<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_POST['id_warga']);
$id_keluarga = htmlspecialchars($_POST['id_keluarga']);
$nomor_keluarga = htmlspecialchars($_POST['nomor_keluarga']);
$nama_kepala_keluarga = htmlspecialchars($_POST['nama_kepala_keluarga']);
$tempat_lahir_warga = htmlspecialchars($_POST['tempat_lahir_warga']);
$tanggal_lahir_warga = htmlspecialchars($_POST['tanggal_lahir_warga']);
$jenis_kelamin_warga = htmlspecialchars($_POST['jk']);
/*
$alamat_warga = htmlspecialchars($_POST['alamat_warga']);
$desa_kelurahan_warga = 'Dukuhdalem';
$kecamatan_warga = 'Ciawi Gebang';
$kabupaten_kota_warga = 'Kuningan';
$provinsi_warga = 'Jawa Barat';
$negara_warga = 'Indonesia';

$agama_warga = htmlspecialchars($_POST['agama_warga']);
$pendidikan_terakhir_warga = htmlspecialchars($_POST['pendidikan_terakhir_warga']);
$pekerjaan_warga = htmlspecialchars($_POST['pekerjaan_warga']);
$status_perkawinan_warga = htmlspecialchars($_POST['status_perkawinan_warga']);
*/
$dusun_warga = htmlspecialchars($_POST['dusun_warga']);
$rt_warga = htmlspecialchars($_POST['rt_warga']);
$rw_warga = htmlspecialchars($_POST['rw_warga']);
$status_warga = 'Pindah Datang';
$alamat_asal = htmlspecialchars($_POST['alamat_asal']);
$tanggal_pindah = htmlspecialchars($_POST['tanggal_pindah']);
$alasan_pindah = htmlspecialchars($_POST['alasan_pindah']);
$jenis_kepindahan = htmlspecialchars($_POST['jenis_kepindahan']);
$nik_sementara=uniqid();

$id_user = $_SESSION['user']['id_user'];
//cek nik warga dari database apakah ada atau tidak

$query_cek="SELECT nomor_keluarga from kartu_keluarga where nomor_keluarga=$nomor_keluarga";
$cek_nik=mysqli_num_rows(mysqli_query($db, $query_cek));
if($cek_nik>0){
  echo "<script>window.alert('Tambah warga gagal!, No. KK $nomor_keluarga sudah digunakan !'); history.back()</script>";
} else {
  //echo "NIK belum digunakan :)";
//}


//echo $query_cek;
// masukkan ke database

$query_warga = "INSERT INTO warga (id_warga, nik_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, alamat_ktp_warga, alamat_warga, desa_kelurahan_warga, kecamatan_warga, kabupaten_kota_warga, provinsi_warga, negara_warga, dusun_warga, rt_warga, rw_warga, agama_warga, pendidikan_terakhir_warga, pekerjaan_warga, status_warga, id_user, created_at, updated_at) VALUES (NULL, '$nik_sementara', '$nama_kepala_keluarga', '$tempat_lahir_warga', '$tanggal_lahir_warga', '$jenis_kelamin_warga', '$alamat_asal', '$alamat_asal', '-', '-', '-', '-', '-', '$dusun_warga', '$rt_warga', '$rw_warga','-','-','-',
	'$status_warga', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

//echo $query;

$query_kk= "INSERT INTO kartu_keluarga (id_keluarga, nomor_keluarga, id_kepala_keluarga, alamat_keluarga, desa_kelurahan_keluarga, kecamatan_keluarga, kabupaten_kota_keluarga, provinsi_keluarga, negara_keluarga, rt_keluarga, rw_keluarga, kode_pos_keluarga, id_user, created_at, updated_at) VALUES ($id_keluarga, '$nomor_keluarga', '$id_warga', '$alamat_asal', '-', '-', '-', '-', '-', '-', '-', '-', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

  $query_mutasi = "INSERT INTO mutasi_masuk (id_mutasi_masuk,id_warga, id_keluarga, dusun_masuk,rt_masuk,rw_masuk,alamat_asal,tanggal_pindah,alasan_pindah,jenis_kepindahan) VALUES(NULL, '$id_warga','$id_keluarga','$dusun_warga','$rt_warga','$rw_warga','$alamat_asal','$tanggal_pindah','$alasan_pindah','$jenis_kepindahan');";
  
echo "<br>".$query_warga."<br>";
echo "<br>".$query_kk."<br>";
echo "<br>".$query_mutasi."<br>";


  $hasil_warga = mysqli_query($db, $query_warga);
  $hasil_kk = mysqli_query($db, $query_kk);
  $hasil = mysqli_query($db, $query_mutasi);

 //cek keberhasilan pendambahan data
  if ($hasil_kk == true) {
     echo "<script>window.alert('Tambah mutasi berhasil'); window.location.href='../mutasi-datang/index.php'</script>";
     # echo "<script>window.alert('Tambah mutasi berhasil');</script>";
  } else {
      echo "<script>window.alert('Tambah mutasi gagal!'); history.back()</script>";
     #  echo "<script>window.alert('Tambah mutasi gagal!');</script>";
      #echo mysqli_error($db);
  }

}