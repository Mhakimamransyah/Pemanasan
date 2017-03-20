  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Main Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li class="active">Dashboard</li> -->
      </ol>
    </section>
	<hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  
        <div class="col-md-4">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
             <a href='#' title='Siswa'>			  
			  <img src="<?php echo base_url();?>/images/student.jpg" style="height: 224px; width:224px; border-radius: 17px" data-widget="collapse">
			 </a>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul>
				<li><a href='<?php echo site_url();?>/Admin/page/siswa/semua'>Lihat Semua Siswa</a></li>
				<li><a href='<?php echo site_url();?>/Admin/page/siswa/tambah'>Tambah Siswa</a></li>
			  </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		
         <div class="col-md-4">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
			 <a href='#' title='Guru'>
              <img src="<?php echo base_url();?>/images/teacher.jpg" style="height: 224px; width:224px; border-radius: 17px" data-widget="collapse">
			 </a>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <ul>
				<li><a href='<?php echo site_url();?>/Admin/page/guru/semua'>Lihat Semua Guru</a></li>
				<li><a href='<?php echo site_url();?>/Admin/page/guru/tambah'>Tambah Guru</a></li>
			  </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
			 <a href='#' title='Wali Murid'>
              <img src="<?php echo base_url();?>/images/parents.jpg" style="height: 224px; width:224px; border-radius: 17px" data-widget="collapse">
			 </a>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <ul>
				<li><a href='<?php echo site_url();?>/Admin/page/wali/semua'>Lihat Semua Wali Murid</a></li>
				<li><a href='<?php echo site_url();?>/Admin/page/wali/tambah'>Tambah Wali Murid</a></li>
			  </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		
      </div>
      <!-- /.row -->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->