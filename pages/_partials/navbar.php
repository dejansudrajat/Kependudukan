<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../dasbor">Aplikasi Penduduk Desa Dukuhdalem - Ciawigebang</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><i class="fa fa-user"></i> Hai, <?php echo $_SESSION['user']['nama_user'] ?></p>
        <li><a href="../dasbor"><i class="fa fa-home"></i> Dashbord</a></li>
        <li><a href="../login/logout.php"><i class="fa fa-sign-out"></i> Keluar</a></li>
      </ul>
    </div>
  </div>
</nav>
