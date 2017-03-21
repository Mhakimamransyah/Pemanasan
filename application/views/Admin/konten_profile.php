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
     <div class="row">	 
		<div class='col-md-3'>
		  <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
				<form class="form-horizontal" id='ava_pict' enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-sm-12">
						  <img class="profile-user-img img-responsive" src="<?php echo base_url(). "/resource/admin/dist/img/" .$model->getAva();?>" id='ava_view' style="width: 150px; height: 140px;">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-11 col-sm-offset-1">
						 <div style="text-overflow: ellipsis; overflow:hidden;">
						  <input type="file" id='ava' name="ava" class='inputWrapper' accept="image/jpg, image/bmp, image/png, image/gif, image/jpeg">
						  <br>
						 </div>
						</div>
					</div>																  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name='submit' class="btn btn-danger">Change Avatar</button>
						</div>
					  </div>
				</form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
	 
        <div class='col-md-9'>
          <div class="box box-primary">
            <div class="box-body box-profile">
				<form class="form-horizontal" id='profile' enctype="multipart/form-data">		
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
/*
function cekEkstensi(file) {
	var thats = false;
	var ekstensi = ['.jpg', '.bmp', '.png', '.gif', '.jpeg'];
	
	file = file.toLowerCase();
	for(i=0; i<ekstensi.length; i++) {
		if(file.endsWith(ekstensi[i])) {
			thats = true;
			break;
		}
	}
	
	return thats;
}
*/

$("#ava").change(function(){
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("ava").files[0]);
	oFReader.onload = function (oFREvent){
		document.getElementById("ava_view").src = oFREvent.target.result;
	}
});

$('#profile').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateProfile/admin",
       data  : $('#profile').serialize(),
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
			alert("Data gagal diupdate, Username / Email telah digunakan");
        }
   })
})

$('#ava_pict').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateAvatar/admin",
       data  : new FormData(this),
	   processData : false,
	   contentType : false,
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Avatar berhasil diupdate");
			   location.reload();
		   } else {
				alert(data);
		   }
	   },
        error : function(data){
			alert("Avatar gagal diupdate");
        }
   })
})
</script>