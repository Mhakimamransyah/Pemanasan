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
        <li>Wali Murid</li> 
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
              <h3 class="box-title">Tambahkan Wali Murid ke Database</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="id" class="col-sm-2 control-label">ID</label>

                  <div class="col-sm-10">
                    <input required type="text" class="form-control" id="id" placeholder="ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telepon" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" placeholder="Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat">
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