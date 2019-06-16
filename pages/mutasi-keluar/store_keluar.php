<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
#$id_keluarga = htmlspecialchars($_POST['id_keluarga']);
$id_warga = htmlspecialchars($_POST['id_warga']);

$alamat_mutasi = htmlspecialchars($_POST['alamat_mutasi']);
$desa_kelurahan_mutasi = htmlspecialchars($_POST['desa_kelurahan_mutasi']);
$kecamatan_mutasi = htmlspecialchars($_POST['kecamatan_mutasi']);
$kabupaten_kota_mutasi = htmlspecialchars($_POST['kabupaten_kota_mutasi']);
$provinsi_mutasi = htmlspecialchars($_POST['provinsi_mutasi']);
$negara_mutasi = htmlspecialchars($_POST['negara_mutasi']);
$dusun_mutasi = htmlspecialchars($_POST['dusun_mutasi']);
$rt_mutasi = htmlspecialchars($_POST['rt_mutasi']);
$rw_mutasi = htmlspecialchars($_POST['rw_mutasi']);
$kode_pos_mutasi = htmlspecialchars($_POST['kode_pos_mutasi']);

$tanggal_pindah = htmlspecialchars($_POST['tanggal_pindah']);
$alasan_pindah = htmlspecialchars($_POST['alasan_pindah']);
$jenis_pindah = htmlspecialchars($_POST['jenis_pindah']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "INSERT INTO mutasi_keluar (id_mutasi, id_warga, alamat_mutasi, desa_kelurahan_mutasi, kecamatan_mutasi, kabupaten_kota_mutasi, provinsi_mutasi, negara_mutasi, dusun_mutasi, rt_mutasi, rw_mutasi, kode_pos_mutasi, tanggal_pindah, alasan_pindah, jenis_pindah, created_at, updated_at) VALUES (NULL,'$id_warga','$alamat_mutasi','$desa_kelurahan_mutasi', '$kecamatan_mutasi', '$kabupaten_kota_mutasi', '$provinsi_mutasi', '$negara_mutasi','$dusun_mutasi', '$rt_mutasi', '$rw_mutasi', '$kode_pos_mutasi','$tanggal_pindah','$alasan_pindah','$jenis_pindah',CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

	$query_update = "UPDATE warga SET status_warga ='Pindah keluar' where id_warga= $id_warga";
  

  $hasil = mysqli_query($db, $query);
	$hasil_update =mysqli_query($db, $query_update);

// cek keberhasilan pendambahan data
if ($hasil_update == true) {
  # echo "sukses";
   echo "<script>window.alert('Mutasi warga berhasil'); window.location.href='../mutasi-keluar/'</script>";
} else {
   echo "<script>window.alert('Mutasi warga gagal!'); window.location.href='../mutasi-keluar/pindah_keluar.php?id_warga=".$id_warga."'</script>";
  # echo "Gagal";
  echo mysqli_error($db);

}
