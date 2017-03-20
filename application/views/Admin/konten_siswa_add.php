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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nisn" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input required type="text" class="form-control" id="nisn" placeholder="NISN">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" placeholder="Jurusan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ttl" placeholder="TTL">
                  </div>
                </div>				
                <div class="form-group">
                  <label for="kontak" class="col-sm-2 control-label">Kontak</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" placeholder="Kontak">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="asal" class="col-sm-2 control-label">Asal SMP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="asal" placeholder="Asal SMP">
                  </div>
                </div>			
                <div class="form-group">
                  <label for="foto" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
                    <input type="file" class="" id="foto">
                  </div>
                </div>				
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input required type="text" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>	
                <div class="form-group">
                  <label for="wali-kelas" class="col-sm-2 control-label">Wali Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="wali-kelas" placeholder="Wali Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="wali-murid" class="col-sm-2 control-label">Wali Murid</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="wali-murid" placeholder="Wali Murid">
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
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->