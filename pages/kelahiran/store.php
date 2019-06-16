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
$nama_bayi = htmlspecialchars($_POST['nama_bayi']);
$jk = htmlspecialchars($_POST['jk']);
$tgl_kelahiran = htmlspecialchars($_POST['tgl_kelahiran']);
$berat_bayi = htmlspecialchars($_POST['berat_bayi']);
$panjang_bayi = htmlspecialchars($_POST['panjang_bayi']);
//$is_kembar = htmlspecialchars($_POST['is_kembar']);
$nama_kepala_keluarga = htmlspecialchars($_POST['nama_kepala_keluarga']);
$id_keluarga = htmlspecialchars($_POST['id_keluarga']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$nama_kk = htmlspecialchars($_POST['nama_kk']);
$nama_ayah = htmlspecialchars($_POST['nama_ayah']);
$nama_ibu = htmlspecialchars($_POST['nama_ibu']);
$lokasi_lahir = htmlspecialchars($_POST['lokasi_lahir']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$penolong = htmlspecialchars($_POST['penolong']);
$nik_sementara=uniqid();
// untuk table warga
$alamat_kk = htmlspecialchars($_POST['alamat_kk']);
$desa_kk = htmlspecialchars($_POST['desa_kk']);
$dusun_kk = htmlspecialchars($_POST['dusun_kk']);
$rt_kk = htmlspecialchars($_POST['rw_kk']);
$rw_kk = htmlspecialchars($_POST['rt_kk']);

/*
echo $nama_bayi."<br>"; 
echo $jk."<br>"; 
echo $tgl_kelahiran."<br>"; 
echo $berat_bayi."<br>"; 
echo $panjang_bayi."<br>"; 
//echo $is_kembar."<br>"; 
echo "id_keluarga = ".$id_keluarga."<br>"; 
echo "nama_kk = ".$nama_kepala_keluarga."<br>"; 
echo $no_kk."<br>"; 
echo $nama_kk."<br>"; 
echo $nama_ayah."<br>"; 
echo $nama_ibu."<br>"; 
echo $lokasi_lahir."<br>"; 
echo $tempat_lahir."<br>"; 
echo $penolong."<br>";
echo $nik_sementara."<br>";
echo $alamat_kk."<br>";
echo $desa_kk."<br>";
echo $dusun_kk."<br>";
echo $rt_kk."<br>";
echo $rw_kk."<br>";
*/

$query2 = "INSERT INTO warga (id_warga, nik_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, alamat_ktp_warga, alamat_warga, desa_kelurahan_warga, kecamatan_warga, kabupaten_kota_warga, provinsi_warga, negara_warga, dusun_warga, rt_warga, rw_warga, agama_warga, pendidikan_terakhir_warga, pekerjaan_warga, status_perkawinan_warga, status_warga, id_user, created_at, updated_at) VALUES ('$id_warga', '$nik_sementara', '$nama_bayi', '$tempat_lahir', '$tgl_kelahiran', '$jk', '$alamat_kk', '$alamat_kk', '$desa_kk', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', '$dusun_kk', '$rt_kk', '$rw_kk', 'Islam', '-', '-', 'Belum Kawin', 'Tinggal Tetap', '-', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

 /*
 $query2="INSERT INTO warga (nik_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, 'alamat_ktp_warga', alamat_warga, desa_kelurahan_warga, kecamatan_warga, kabupaten_kota_warga, provinsi_warga, negara_warga, dusun_warga, rt_warga, agama_warga, pendidikan_terakhir_warga, pekerjaan_warga,status_warga,  
)";
*/

# echo $query2."<br><br>";

$hasil2 = mysqli_query($db, $query2);
	

$query="INSERT INTO tbl_kelahiran (id_kelahiran, tgl_kelahiran, nama_bayi, jk, berat_bayi, panjang_bayi, nama_ayah, nama_ibu, lokasi_lahir, tempat_lahir, id_keluarga, penolong, id_warga, id_surat) VALUES ('NULL','$tgl_kelahiran','$nama_bayi', '$jk','$berat_bayi','$panjang_bayi','$nama_ayah','$nama_ibu','$lokasi_lahir','$tempat_lahir','$nama_kepala_keluarga','$penolong','$id_warga','NULL')";

$sql="INSERT INTO warga_has_kartu_keluarga (id_warga, id_keluarga) VALUES ('$id_warga','$id_keluarga')";
$sql_exe=mysqli_query($db, $sql);



# echo $sql."<br><br>";
# echo $query."<br><br>";

	$hasil = mysqli_query($db, $query);


	// cek keberhasilan pendambahan data
	if ($hasil == true) {	
 		echo "<script>window.alert('Tambah data kelahiran dan penduduk berhasil'); window.location.href='../kelahiran/index.php'</script>";
	} else {
  		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
  		echo mysqli_error($db);
	}

?>