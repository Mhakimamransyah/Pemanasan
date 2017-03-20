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
        <li>Guru</li> 
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
              <h3 class="box-title">Tambahkan Guru ke Database</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id='form' class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nip" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input required type="text" class="form-control" name="NIP" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat">
                  </div>
                </div>                			
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<div class='col-sm-2'></div>				
				<div class='col-sm-10'>
					<button type="submit" class="btn btn-info pull-left">Tambahkan</button>
				</div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
		</div>      
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <script>
$('#form').on('submit',function(e){
e.preventDefault();
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/tambah/guru",
       data  : new FormData(this),
	   processData : false,
	   contentType : false,
       beforeSubmit : function(data){
           
       },
       success : function(data){
		   if(data==1) {
			   alert("Guru berhasil ditambahkan");
			   location.reload();
		   } else {
				alert(data);
		   }
	   },
        error : function(data){
			alert("Guru gagal ditambahkan, NIP telah digunakan");
        }
   })
})
  </script>