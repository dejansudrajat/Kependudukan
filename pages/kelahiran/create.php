<?php include('../_partials/top.php') ?>

<?php include('list_keluarga.php') ?>
<h1 class="page-header">Tambah Kelahiran</h1>
<?php include('_partials/menu.php');
include('../../config/koneksi.php');

$query3 = "SELECT * FROM warga order by id_warga DESC";
  $hasil3 = mysqli_query($db, $query3);
  $jum=mysqli_num_rows($hasil3);
if ($jum>0){
  $hasil4=mysqli_fetch_array($hasil3);
  $kode=$hasil4['id_warga']+1;
} else {
  $kode=1;

}




?>

<form action="store.php" method="post">
<label class="col-md-0 control-label" for="="><h4>Data Bayi</h4></label>
  <legend></legend>
  <div class="form-group">
    <label class="col-md-3 control-label" for="nama_bayi">Id Warga</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="id_warga" id="id_warga" value="<?php echo $kode;?>" size="30" placeholder="ID warga" required/> 
      <?php # echo form_error('nama_bayi', '<p class="field_error">','</p>')?>  
    </span>
    </div>
    </div>

  <div class="form-group">
    <label class="col-md-3 control-label" for="nama_bayi">Nama Bayi</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="nama_bayi" id="nama_bayi" size="30" placeholder="Nama Bayi" required/> 
      <?php # echo form_error('nama_bayi', '<p class="field_error">','</p>')?>  
    </span>
    </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-3 control-label" for="id_jen_kel">Jenis Kelamin</label>
    <div class="col-md-9">
      <div class="radio">
        <label class="radio"><input type="radio" name="jk" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="jk" value="L"> Perempuan</label>
      </div>
    </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-3 control-label" for="tgl_kelahiran">Tanggal Kelahiran</label> 
    <div class="col-md-9">  
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tgl_kelahiran" size="20" readonly="readonly" />
    </div>
    <span class="help-block"> 
    </span>
    </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="berat_bayi">Berat Bayi </label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="berat_bayi" id="berat_bayi" size="10" placeholder="Berat Bayi (kg)" required/> 
      <?php # echo form_error('berat_bayi', '<p class="field_error">','</p>')?> 
    </span>
    </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="panjang_bayi">Panjang Bayi </label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="panjang_bayi" id="panjang_bayi" size="10" placeholder="Panjang Bayi (cm)" required/> 
      <?php # echo form_error('panjang_bayi', '<p class="field_error">','</p>')?>
    </span>
    </div>
    </div>
  <!--
    <div class="form-group">
      <label class="col-md-3 control-label" for="is_kembar">Apakah Bayi Kembar?</label>
      <div class="col-md-9">
        <div class="radio">
          <?php # echo form_radio('is_kembar', 'Y', FALSE); ?><label class="radio"><input type="radio" name="is_kembar" value="Y"> Ya</label>
        </div>
        <div class="radio">
          <?php # echo form_radio('is_kembar', 'N', TRUE); ?><label class="radio"><input type="radio" name="is_kembar" value="N" checked="checked"> Tidak</label>
        </div>
      </div>
    </div>
  -->
  <legend>&nbsp </legend> 
  
  <label class="col-md-0 control-label" for="#"><h4>Data Orang Tua</h4></label>
  <legend></legend>
  
    <div class="form-group">
       <label class="col-md-3 control-label" for="no_nama_kk">Pencarian Kepala Keluarga</label> 
       <div class="col-md-9">
       <span class="help-block">
         <select class="form-control selectlive" name="nama_kepala_keluarga" id="isian" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_keluarga as $keluarga) : ?>
          <option value="<?php echo $keluarga['nomor_keluarga'] ?>" no_kk="<?php echo $keluarga['nomor_keluarga'] ?>" alamat_kk="<?php echo $keluarga['alamat_keluarga'] ?>"
            id_keluarga="<?php echo $keluarga['id_keluarga'] ?>"
            nm_kk="<?php echo $keluarga['nama_warga'] ?>"
            desa_kk="<?php echo $keluarga['desa_kelurahan_warga'] ?>"
            dusun_kk="<?php echo $keluarga['dusun_warga'] ?>"
            rt_kk="<?php echo $keluarga['rt_warga'] ?>"
            rw_kk="<?php echo $keluarga['rw_warga'] ?>">
            <?php echo $keluarga['nama_warga']?> (No. KK : <?php echo $keluarga['nomor_keluarga'] ?>)
          </option>
          <?php endforeach ?>
          </select>
       <!--<input type="text" class="form-control" name="no_nama_kk" id="no_nama_kk" size="50" placeholder="No Kepala Keluarga / Nama (min 2 karakter)"  />-->

      </span>
      <legend><br></legend>
       </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="no_kk">No Kepala Keluarga</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="no_kk_sementara" name="no_kk_sementara" type="text" placeholder="No Kepala Keluarga" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="no_kk" id="no_kk" size="50"  /> 
        <input type="hidden" class="form-control input-md" name="id_keluarga" id="id_keluarga" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="nama_kk">Nama Kepala Keluarga</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="nama_kk_sementara" name="nama_kk_sementara" type="text" placeholder="Nama Kepala Keluarga" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="nama_kk" id="nama_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="alamat_kk">Alamat Kepala Keluarga</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="alamat_kk_sementara" name="alamat_kk_sementara" type="text" placeholder="Alamat Kepala Keluarga" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="alamat_kk" id="alamat_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="desa_kk">Desa</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="desa_kk_sementara" name="desa_kk_sementara" type="text" placeholder="Desa" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="desa_kk" id="desa_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="dusun_kk">Dusun</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="dusun_kk_sementara" name="dusun_kk_sementara" type="text" placeholder="Dusun" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="dusun_kk" id="dusun_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="rt_kk">RT</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="rt_kk_sementara" name="rt_kk_sementara" type="text" placeholder="RT" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="rt_kk" id="rt_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="rw_kk">RW</label> 
       <div class="col-md-9">
       <span class="help-block">
        <input id="rw_kk_sementara" name="rw_kk_sementara" type="text" placeholder="RW" class="form-control input-md" required="" disabled/>
        <input type="hidden" class="form-control input-md" name="rw_kk" id="rw_kk" size="50"  /> 
      </span>
       </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="nama_ayah">Nama Ayah</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" size="50" placeholder="Nama Ayah"  /> 
       <?php #echo form_error('nama_ayah', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="nama_ibu">Nama Ibu</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" size="50" placeholder="Nama Ibu"  /> 
       <?php # echo form_error('nama_ibu', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>


  <legend>&nbsp </legend> 
  <label class="col-md-0 control-label" for="="><h4>Data Kelahiran</h4></label>
  <legend></legend>
  
    <div class="form-group">
       <label class="col-md-3 control-label" for="lokasi_lahir">Lokasi Lahir </label>
       <div class="col-md-9">
        <span class="help-block">
       <select type="text" class="form-control input-md" name="lokasi_lahir" id="lokasi_lahir">
          <option value="Tidak Diketahui">--Pilih--</option>
          <option value="Rumah Bersalin">Rumah Bersalin</option>
          <option value="Bukan Rumah Bersalin">Bukan Rumah Bersalin</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </span>
      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
    
    </div>  
    </div>
  
    <div class="form-group">
    <label class="col-md-3 control-label" for="tempat_lahir">Tempat Lahir</label> 
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="tempat_lahir" id="tempat_lahir" size="30" placeholder="Tempat Lahir"/> 
    </span>
      <?php # echo form_error('tempat_lahir', '<p class="field_error">','</p>')?>
    </div>  
    </div>

      <div class="form-group">
    <label class="col-md-3 control-label" for="penolong">Nama Penolong Kelahiran</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="penolong" id="penolong" size="30" placeholder="Nama Penolong Kelahiran"/>
      <?php # echo form_error('penolong', '<p class="field_error">','</p>')?>
    </span>
    </div>  
    </div>

  <legend>&nbsp </legend> 
  <!--
  <label class="col-md-0 control-label" for="="><h4>Pencetak Surat Kelahiran</h4></label>
  <legend></legend>
  <div class="form-group">
     <label class="col-md-3 control-label" for="penolong">Aparat Desa</label>
    <div class="col-md-9">
      <div class="form-group">
        <select class="form-control" name="aparat_desa">
          <option>--Pilih--</option>
          <option>Kepala Desa</option>
          <option>Sekretaris Desa</option>
          <option>Kaur</option>
        </select>
      </div>

        <?php # $id = 'id="id_perangkat" class="form-control input-md" required'; echo form_dropdown('id_perangkat',$nama_pamong,'',$id)?>
    <span class="help-block"><?php #echo form_error('id_perangkat', '<p class="field_error">','</p>')?> </span> 
    </div>  
  </div>
-->
<legend></legend>
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
        var id_keluarga =$("#isian option:selected").attr("id_keluarga");
        var no_kk =$("#isian option:selected").attr("no_kk");
        var nm_kk =$("#isian option:selected").attr("nm_kk");
        var alamat_kk =$("#isian option:selected").attr("alamat_kk");
        var desa_kk =$("#isian option:selected").attr("desa_kk");
        var dusun_kk =$("#isian option:selected").attr("dusun_kk");
        var rt_kk =$("#isian option:selected").attr("rt_kk");
        var rw_kk =$("#isian option:selected").attr("rw_kk");
//window.alert ("hehe");
        //pindah isi ke tag lain
        $("#id_keluarga").val(id_keluarga);
        $("#no_kk_sementara").val(no_kk);
        $("#no_kk").val(no_kk);
        $("#nama_kk_sementara").val(nm_kk);
        $("#nama_kk").val(nm_kk);
        $("#alamat_kk_sementara").val(alamat_kk);
        $("#alamat_kk").val(alamat_kk);
        $("#desa_kk_sementara").val(desa_kk);
        $("#desa_kk").val(desa_kk);
        $("#dusun_kk_sementara").val(dusun_kk);
        $("#dusun_kk").val(dusun_kk);
        $("#rt_kk_sementara").val(rt_kk);
        $("#rt_kk").val(rt_kk);
        $("#rw_kk_sementara").val(rw_kk);
        $("#rw_kk").val(rw_kk);


  });

</script>
