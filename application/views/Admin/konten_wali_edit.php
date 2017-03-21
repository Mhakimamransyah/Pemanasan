  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Menu Wali Murid</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Wali Murid</li> 
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
            <form class="form-horizontal" id='form'>
              <div class="box-body">
                <div class="form-group">
                  <label for="id" class="col-sm-2 control-label">ID</label>

                  <div class="col-sm-10">
                    <input required readonly type="text" class="form-control" name="id_wali_murid" placeholder="ID" value="<?php echo $data[0]['id_wali_murid'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_wali" placeholder="Nama" value="<?php echo $data[0]['nama_wali'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telepon" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $data[0]['telepon'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="TTL" placeholder="TTL" value="<?php echo $data[0]['TTL'];?>">
                  </div>
                </div>				
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data[0]['alamat'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $data[0]['password'];?>">
                  </div>
                </div>				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<div class='col-sm-2'></div>				
				<div class='col-sm-10'>
					<button type="submit" class="btn btn-info pull-left">Simpan perubahan</button>
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
       url  : "<?php echo site_url();?>/Admin/updateProfile/wali",
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