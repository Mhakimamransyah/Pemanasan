<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url();?>/resource/admin/plugins/datatables/dataTables.bootstrap.css">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Lihat Semua Wali</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Wali</li> 
		<li class="active">Lihat Semua</li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
		<div class='col-md-12'>
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Wali Siswa SMAN 69 Palembang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel" class="table table-bordered table-striped">
                <thead>
					<tr>
					  <th>No</th>
					  <th>ID</th>
					  <th>Nama</th>
					  <th>Telepon</th>
					  <th>Aksi</th>
					</tr>
                </thead>
                <tbody>
				 <?php 
				 $i=1;
				 foreach($walis as $wali) {
				 ?>
					<tr id='<?php echo $wali['id_wali_murid']; ?>'>
					  <td><?php echo $i++; ?></td>
					  <td><?php echo $wali['id_wali_murid']; ?></td>
					  <td><?php echo $wali['nama_wali']; ?></td>
					  <td><?php echo $wali['telepon']; ?></td>
					  <td align='center'>
						<a href='<?php echo site_url();?>/Admin/page/detail/wali/<?php echo $wali['id_wali_murid']; ?>' title='Edit'><span class='fa fa-search'></span></a>     
						|
						<a href='<?php echo site_url();?>/Admin/delete/wali/<?php echo $wali['id_wali_murid']; ?>' title='Hapus'><span class='fa fa-remove'></span></a>
					  </td>				  
					</tr>
				 <?php } ?>
                </tbody>
                <tfoot>
					<tr>
					  <th>No</th>
					  <th>ID</th>
					  <th>Nama</th>
					  <th>Telepon</th>
					  <th>Aksi</th>
					</tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- DataTables -->
<script src="<?php echo base_url();?>/resource/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/resource/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
  
<script>
  $(function () {
    $("#tabel").DataTable();
  });
</script>