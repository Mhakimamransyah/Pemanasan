  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Menu Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li> 
		<li class="active">Edit</li> 
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
						  <img class="profile-user-img img-responsive" src="<?php echo base_url(). "/resource/siswa/img/fotosiswa/" .$data[0]['Foto'];?>" id='ava_view' style="width: 150px; height: 140px;">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-11 col-sm-offset-1">
						 <div style="text-overflow: ellipsis; overflow:hidden;">
						  <input type="file" id='Foto' name="Foto" class='inputWrapper' accept="image/jpg, image/bmp, image/png, image/gif, image/jpeg">
						  <br>
						 </div>
						</div>
					</div>																  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name='submit' class="btn btn-danger">Ganti Foto</button>
						</div>
					  </div>
					  <input required readonly type="text" class="sr-only" name="NISN" id="NISN" value="<?php echo $data[0]['NISN'];?>">
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
            <form class="form-horizontal" id='form'>
              <div class="box-body">
                <div class="form-group">
                  <label for="nisn" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input required readonly type="text" class="form-control" name="NISN" id="NISN" placeholder="NISN" value="<?php echo $data[0]['NISN'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" required value="<?php echo $data[0]['Nama'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Jurusan" value="<?php echo $data[0]['Jurusan'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="TTL" name="TTL" placeholder="TTL" value="<?php echo $data[0]['TTL'];?>">
                  </div>
                </div>				
                <div class="form-group">
                  <label for="kontak" class="col-sm-2 control-label">Kontak</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kontak" name="Kontak" placeholder="Kontak" value="<?php echo $data[0]['Kontak'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $data[0]['Alamat'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="asal" class="col-sm-2 control-label">Asal SMP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Asal_SMP" name="Asal_SMP" placeholder="Asal SMP" value="<?php echo $data[0]['Asal_SMP'];?>">
                  </div>
                </div>							
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
				   <input type="text" class="form-control" name="Password" id="Password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password harus berisikan kombinasi 1 angka dan 1 huruf besar dan kecil" required value="<?php echo $data[0]['Password'];?>">
                  </div>
                </div>		
                <div class="form-group">
                  <label for="wali-kelas" class="col-sm-2 control-label">Wali Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ID_wali_kelas" id="ID_wali_kelas" placeholder="Wali Kelas" value="<?php echo $data[0]['ID_wali_kelas'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="wali-murid" class="col-sm-2 control-label">Wali Murid</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ID_wali_murid" id="ID_wali_murid" placeholder="Wali Murid" value="<?php echo $data[0]['ID_wali_murid'];?>">
                  </div>
                </div>				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<div class='col-sm-2'>
					<!--<button type="reset" class="btn btn-warning">Reset</button>	 -->	
				</div>				
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

$("#Foto").change(function(){
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("Foto").files[0]);
	oFReader.onload = function (oFREvent){
		document.getElementById("ava_view").src = oFREvent.target.result;
	}
});

$('#form').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateProfile/siswa",
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

$('#ava_pict').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/updateAvatar/siswa",
       data  : new FormData(this),
	   processData : false,
	   contentType : false,
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Foto berhasil diupdate");
			   location.reload();
		   } else {
				alert(data);
		   }
	   },
        error : function(data){
			alert("Foto gagal diupdate");
        }
   })
})
</script>