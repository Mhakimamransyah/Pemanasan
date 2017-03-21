  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Menu Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Guru</li> 
		<li class="active">Edit</li> 
      </ol>
    </section>
	<hr>

    <!-- Main content -->
    <section class="content">
     <div class="row">	 	 
        <div class='col-md-12'>
          <div class="box box-primary">
            <div class="box-body box-profile">
            <!-- form start -->
            <form id='form' class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nip" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input required readonly type="text" class="form-control" name="NIP" placeholder="NIP" value="<?php echo $data[0]['NIP'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" value="<?php echo $data[0]['Nama'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat" value="<?php echo $data[0]['Alamat'];?>">
                  </div>
                </div>                			
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<div class='col-sm-2'></div>				
				<div class='col-sm-10'>
					<button type="submit" class="btn btn-info pull-left">Simpan Perubahan</button>
				</div>
              </div>
              <!-- /.box-footer -->
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->	 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
<script>
$('#form').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateProfile/guru",
       data  : $('#form').serialize(),
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Data berhasil diupdate");
		   } else {
				alert(data);
		   }
	   },
        error : function(data){
			alert("Data gagal diupdate");
        }
   })
})
</script>