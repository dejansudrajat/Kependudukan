
<?php include('../_partials/top.php') ?>
    <link  href="../../assets/css/surat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link  href="../../assets/css/surat_cetak.css" rel="stylesheet" type="text/css" media="print"/>s
<h1 class="page-header">Data Surat</h1>
<?php include('_partials/menu.php') ?>

<div class="thumbnail">
  <ul>
    <li><a href="surat_kelahiran.php"><img src="../../assets/img/gb_surat.png" /><br />Surat Keterangan Kelahiran</a></li>
    <li><a href="surat_permohonan_kk_baru.php"><img src="../../assets/img/gb_surat.png"  /><br />Surat Permohonan KK Baru</a></li>
    <li><a href="surat_permohonan_perubahan_kk.php"><img src="../../assets/img/gb_surat.png" /><br />Surat Permohonan Perubahan KK</a></li>
    <li><a href="surat_kematian.php"><img src="../../assets/img/gb_surat.png"  />
    <br />Surat Keterangan Kematian</a></li>
    <li><a href="surat_permohonan_pindah_datang.php"><img src="../../assets/img/gb_surat.png"  />
    <br />Surat Permohonan Pindah Datang</a></li>
  </ul>
</div>
<script>
$(function(){
  $(".thumbnail li").click(function(){
    var url = $(this).find("a").attr("href");
    // load div center-column dengan url dari anchor tsb
    $("#center-column").html("<div class='loading'>Mohon ditunggu .........</div>")
    .load(url);
    return false;
    })
  })
</script>
<style>
.thumbnail{
  position:relative;
  margin-left:45px;
  } 
.thumbnail ul, .thumbnail li{
  list-style : none;
  float: left;
  padding:2px;
  text-align:center;
  position:relative;
}
.thumbnail li{
  width:160px;
  height:150px;
  background:#E9E8F1;
  padding:8px;
  cursor:pointer;
  margin:6px;
  }
.thumbnail li:hover{
  position:relative;
  background:#FFFFFF;
  border:1px solid #FFA500;
  padding:7px;
} 
.thumbnail li img{
  border:1px solid #000000;
  }
</style>


<?php include('../_partials/bottom.php') ?>
