<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>
<div class="nav navbar-sidebar">
            
<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="fa fa-home"></i> Dashbord</a>
  </li>
</ul>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="fa fa-user"></i> Data Penduduk</a>
  </li>
  <li class="<?php is_active('kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="fa fa-user fa-group"></i> Data Kartu Keluarga</a>
  </li>
</ul>

<div class="dropdown">
<ul class="nav nav-sidebar">
  <li class="<?php is_active('mutasi'); ?>">
    <a href="#list" data-toggle="collapse"><i class="fa fa-exchange fa-fw"></i> Data Mutasi</a>
      <!--<a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>-->
  </li>
    <div id="list" class="collapse">
      <div class="list-group">
        <a href="../mutasi-datang" class="list-group-item"><i class="fa fa-long-arrow-right fa-fw"></i> Pindah Datang</a>
        <a href="../mutasi-keluar" class="list-group-item"><i class="fa fa-long-arrow-left fa-fw"></i> Pindah Keluar</a>
      </div>
    </div>
  
</ul> 
</div>
<div class="dropdown">
<ul class="nav nav-sidebar">
  <li class="<?php is_active('peristiwa'); ?>">
    <a href="#peristiwa" data-toggle="collapse"><i class="fa fa-newspaper-o fa-fw"></i> Peristiwa</a>
      <!--<a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>-->
  </li>
    <div id="peristiwa" class="collapse">
      <div class="list-group">
        <a href="../kelahiran" class="list-group-item"><i class="fa fa-venus-mars fa-fw"></i> Kelahiran</a>
        <a href="../meninggal" class="list-group-item"><i class="fa fa-ambulance fa-fw"></i> Kematian</a>
      </div>
    </div>
  
</ul> 
</div>

<!--
<ul class="nav nav-sidebar">
  <li class="<?php is_active('galeri'); ?>">
    <a href="../galeri"><i class="glyphicon glyphicon-picture"></i> Galeri</a>
  </li>
</ul>
-->

<?php if ($_SESSION['user']['status_user'] != 'Kasi_Pemerintahan'): ?>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="fa fa-user"></i> User</a>
  </li>
</ul>
<?php endif; ?>

</div>
