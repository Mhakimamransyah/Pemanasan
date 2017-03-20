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
        <li>Siswa</li> 
		<li class="active">Tambah</li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
		<div class="col-md-12">
		  <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Siswa ke Database</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id='form'>
              <div class="box-body">
                <div class="form-group">
                  <label for="nisn" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input required type="text" class="form-control" name="NISN" id="NISN" placeholder="NISN">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Jurusan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="TTL" name="TTL" placeholder="TTL">
                  </div>
                </div>				
                <div class="form-group">
                  <label for="kontak" class="col-sm-2 control-label">Kontak</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kontak" name="Kontak" placeholder="Kontak">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="asal" class="col-sm-2 control-label">Asal SMP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Asal_SMP" name="Asal_SMP" placeholder="Asal SMP">
                  </div>
                </div>			
                <div class="form-group">
                  <label for="foto" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
					<img src="" style="width: 146px; height: 141px;" id="foto_view">
                    <input type="file" class="" id="Foto" name='Foto'>
                  </div>
                </div>				
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
				   <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password harus berisikan kombinasi 1 angka dan 1 huruf besar dan kecil" required>
                  </div>
                </div>	
				<div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Confirm</label>

                  <div class="col-sm-10">
				   <input type="password" class="form-control" name="" id="confirm" placeholder="Confirm password" required>
                  </div>
                </div>	
                <div class="form-group">
                  <label for="wali-kelas" class="col-sm-2 control-label">Wali Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ID_Wali_Kelas" id="ID_Wali_Kelas" placeholder="Wali Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="wali-murid" class="col-sm-2 control-label">Wali Murid</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ID_Wali_Murid" id="ID_Wali_Murid" placeholder="Wali Murid">
                  </div>
                </div>				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<div class='col-sm-2'>
					<button type="reset" class="btn btn-warning">Reset</button>			
				</div>				
				<div class='col-sm-10'>
					<button type="submit" class="btn btn-info pull-left">Tambahkan</button>
				</div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>  
$("#Foto").change(function(){
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("Foto").files[0]);
	oFReader.onload = function (oFREvent){
		document.getElementById("foto_view").src = oFREvent.target.result;
	}
});

$('#form').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/tambah/siswa",
       data  : new FormData(this),
	   processData : false,
	   contentType : false,
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Siswa berhasil ditambahkan");
			   location.reload();
		   } else {
				alert(data);
		   }
	   },
        error : function(data){
			alert("Siswa gagal ditambahkan, NISN telah digunakan");
        }
   })
})

</script>