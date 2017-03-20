  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Profile Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li> 
      </ol>
    </section>
	<hr>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="row">
        <div class='col-md-12'>
		  <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
				<form class="form-horizontal" id='profile'>				
					<div class="form-group">
					  <label for="ava" class="col-sm-2 control-label">
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/resource/admin/dist/img/<?php echo $model->getAva();?>" alt="User profile picture">
					  </label>
						<div class="col-sm-10">
						  <input type="file" name="ava">
						</div>
					</div>
					  <div class="form-group">
						<label for="nama" class="col-sm-2 control-label">Nama</label>

						<div class="col-sm-10">
						  <input type="text" class="form-control" name="nama" value="<?php echo $model->getNama();?>">
						</div>
					  </div>
					  <div class="form-group">
						<label for="id" class="col-sm-2 control-label">ID</label>

						<div class="col-sm-10">
						  <input type="text" class="form-control" name="id" value="<?php echo $model->getId();?>" readonly>
						</div>
					  </div>				  
					  <div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>

						<div class="col-sm-10">
						  <input type="text" class="form-control" name="username" value="<?php echo $model->getUsername();?>">
						</div>
					  </div>				  
					  <div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>

						<div class="col-sm-10">
						  <input type="email" class="form-control" name="email" value="<?php echo $model->getEmail();?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name='submit' class="btn btn-danger">Save Changes</button>
						</div>
					  </div>
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
$('#profile').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateProfile",
       data  : $('#profile').serialize(),
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Data berhasil diupdate");
		   }
	   },
        error : function(data){
			alert("Data gagal dipdate");
        }
   })
})
</script>