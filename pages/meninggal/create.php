<?php include('../_partials/top.php') ?>

<?php include('list_keluarga.php') ?>
<h1 class="page-header">Tambah Kematian</h1>
<?php include('_partials/menu.php') ?>
<form action="store.php" method="post">
  <label class="col-md-0 control-label" for="#"><h4>Data Kematian Penduduk</h4></label>
  <legend></legend>
  
    <div class="form-group">
       <label class="col-md-3 control-label" for="no_nama_kk">Pencarian Data Penduduk</label> 
       <div class="col-md-9">
       <span class="help-block">
         <select class="form-control selectlive" name="nama_kepala_keluarga" id="isian" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['nik_warga'] ?>" nik_warga="<?php echo $warga['nik_warga'] ?>"
           id_warga="<?php echo $warga['id_warga'] ?>"
           nama_warga="<?php echo $warga['nama_warga'] ?>">
            <?php echo $warga['nama_warga']?> (NIK : <?php echo $warga['nik_warga'] ?>)
          </option>
          <?php endforeach ?>
          </select>
       <!--<input type="text" class="form-control" name="no_nama_kk" id="no_nama_kk" size="50" placeholder="No Kepala Keluarga / Nama (min 2 karakter)"  />-->

      </span>
      <legend><br></legend>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="nama_warga">Nama Penduduk</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="nama_warga_sementara" name="nama_warga_sementara" type="text" placeholder="Nama Penduduk" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="nama_warga" id="nama_warga" size="50"  /> 
      </span>
       </div>
      <?php # echo form_error('nama_ayah', '<p class="field_error">','</p>')?>  
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="nik_warga">NIK</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="nik_warga_sementara" name="nik_warga_sementara" type="text" placeholder="NIK" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="id_warga" id="id_warga" size="50"  /> 
        <input type="hidden" class="form-control input-md" name="NIK" id="nik_warga" size="50"  /> 
      </span>
       </div>
    </div>
        
  <div class="form-group">
    <label class="col-md-3 control-label" for="tgl_kematian">Tanggal Kematian</label> 
    <div class="col-md-9">  
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tgl_kematian" size="20" readonly="readonly" />
    </div>
    <span class="help-block"> 
      <?php # echo form_error('tgl_kelahiran', '<p class="field_error">','</p>')?>    
    </span>
    </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="penyebab_kematian">Penyebab Kematian</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="penyebab_kematian" id="penyebab_kematian" size="50" placeholder="Penyebab Kematian"  /> 
       <?php #echo form_error('nama_ayah', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="tempat_kematian">Tempat Kematian</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="tempat_kematian" id="tempat_kematian" size="50" placeholder="Tempat Kematian"  /> 
       <?php # echo form_error('nama_ibu', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>


  <legend>&nbsp </legend> 
  <label class="col-md-0 control-label" for="="><h4>Data Pelapor Kematian</h4></label>
  <legend></legend>

  <div class="form-group">
    <label class="col-md-3 control-label" for="pelapor">Nama Pelapor Kematian</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="pelapor" id="pelapor" size="30" placeholder="Nama Pelapor Kematian"/>
      <?php # echo form_error('penolong', '<p class="field_error">','</p>')?>
    </span>
    </div>  
    </div>

  <div class="form-group">
    <label class="col-md-3 control-label" for="hub_pelapor">Hubungan Pelapor</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="hub_pelapor" id="hub_pelapor" size="30" placeholder="Hubungan Pelapor"/>
      <?php # echo form_error('penolong', '<p class="field_error">','</p>')?>
    </span>
    </div>  
    </div>


  <legend>&nbsp </legend> 
<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="reset" class="btn btn-warning">
  <i class="fa fa-repeat 
 "></i> Reset
</button>
</form>



<?php include('../_partials/bottom.php') ?>
<script type="text/javascript">
    $("#isian").on("change",function(){
        var id_warga =$("#isian option:selected").attr("id_warga");
        var nik_warga =$("#isian option:selected").attr("nik_warga");
        var nama_warga =$("#isian option:selected").attr("nama_warga");
//window.alert ("hehe");
        //pindah isi ke tag lain
        $("#id_warga").val(id_warga);
        $("#nik_warga_sementara").val(nik_warga);
        $("#nik_warga").val(nik_warga);
        $("#nama_warga_sementara").val(nama_warga);
        $("#nama_warga").val(nama_warga);
  });

</script>
