<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');
# include ('data-cek.php');

// ambil data dari form
$id_warga = htmlspecialchars($_POST['id_warga']);
$nama_warga = htmlspecialchars($_POST['nama_warga']);
$NIK = htmlspecialchars($_POST['NIK']);
$tgl_kematian = htmlspecialchars($_POST['tgl_kematian']);
$penyebab = htmlspecialchars($_POST['penyebab_kematian']);
$tempat_kematian = htmlspecialchars($_POST['tempat_kematian']);
$pelapor = htmlspecialchars($_POST['pelapor']);
$hub_pelapor = htmlspecialchars($_POST['hub_pelapor']);
/*
echo "id_warga=".$id_warga."<br>"; 
echo "nama_warga=".$nama_warga."<br>"; 
echo "NIK=".$NIK."<br>"; 
echo "tgl_kematian=".$tgl_kematian."<br>"; 
echo "penyebab=".$penyebab."<br>"; 
echo "tempat_kematian=".$tempat_kematian."<br>"; 
echo "pelapor=".$pelapor."<br>"; 
echo "hub_pelapor=".$hub_pelapor."<br>"; 
*/

$query="INSERT INTO tbl_meninggal (id_meninggal, tgl_meninggal, sebab, id_warga, tempat_kematian, nama_pelapor, hubungan_pelapor, id_surat) VALUES 
('','$tgl_kematian','$penyebab','$id_warga','$tempat_kematian','pelapor','$hub_pelapor','')";

# echo "<br>".$query;

$query2="UPDATE warga SET status_warga = 'Meninggal' WHERE id_warga = $id_warga";

# echo "<br>".$query2;


$query_exe=mysqli_query($db, $query);
$query_exe2=mysqli_query($db, $query2);

if ($query_exe2 == TRUE){
	echo "<script>window.alert('Tambah data kematian berhasil'); window.location.href='../meninggal/index.php'</script>";
} else {
	echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
  		echo mysqli_error($db);
 }
?>