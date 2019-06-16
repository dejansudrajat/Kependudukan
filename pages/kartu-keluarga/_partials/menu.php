<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
      <div class="col-md-2">
        <a href="create.php" class="btn btn-success">
          <i class="fa fa-plus-square"></i> Tambah
        </a>
      </div>
      <?php endif; ?>
      <div class="col-md-2">
        <a href="index.php" class="btn btn-info">
          <i class="fa fa-eye"></i> Lihat Data
        </a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-primary">
          <i class="fa fa-refresh"></i> Refresh
        </a>
      </div>
      <div class="col-md-2">
        <a href="../kartu-keluarga/cetak-index.php" class="btn btn-primary" target="_blank">
          <i class="glyphicon glyphicon-print"></i> Cetak
        </a>
      </div>
    </div>
  </div>
</div>
<br>
