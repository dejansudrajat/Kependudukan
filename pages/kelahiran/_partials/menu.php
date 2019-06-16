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
        <button type="button" href="" class="btn btn-primary">
          <i class="fa fa-refresh"></i> Refresh
        </button>
      </div>
      <div class="col-md-2">
        <a href="cetak-index.php" target="_blank" class="btn btn-outline btn-primary">
          <i class="glyphicon glyphicon-print"></i> Cetak
        </a>
      </div>
    </div>
  </div>
</div>
<br>
