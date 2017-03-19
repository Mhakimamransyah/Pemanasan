<!DOCTYPE html>
<html lang="en">
<head>
<title>Siswa | Join Kelas</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="<?php echo base_url();?>/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/matrix-media.css" />
<link href="<?php echo base_url();?>/resource/siswa/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"><?php echo $model->getNama()." ";?></span><!-- <?php echo $this->session->tempdata("nisn"); ?> --></a>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="<?php echo site_url();?>/Siswa/logoutProcess"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
     <li><img src="<?php echo base_url();?>/resource/siswa/img/fotosiswa/<?php echo $model->getFoto();?>" style="width: 202px;
    padding: 8px;
    height: 215px; margin-top: -80px"></li>
     <li id="Beranda"><a href="<?php echo site_url(); ?>/Siswa/index/main"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
     <li id="Pelajaran"><a href=""><i class="icon icon-book"></i> <span>Pelajaran</span><span class="label label-important">3</span></a> </li>

     <li id="Kelas" class="submenu open" > <a href="#"><i class="icon icon-group"></i> <span>Kelas</span></a>
      <ul>
        <li id="KelasX"><a href="<?php echo site_url();?>/Siswa/index/X">X (sepuluh)</a></li>
        <li id="KelasXI"><a href="">XI (sebelas)</a></li>
        <li id="KelasXII"><a href="">XII (duabelas)</a></li>
      </ul>

     <li ><a href="<?php echo site_url(); ?>/Siswa/index/profile"><i class="icon icon-user"></i> <span>Profile</span></a> </li>
     <li id="Guru"><a href="#"><i class="icon icon-leaf"></i> <span>Guru</span></a> </li>
     <li id="Pesan"><a href="#"><i class="icon  icon-envelope-alt"></i> <span>Pesan</span><span class="label label-important">3</span></a> </li>
     <li id="TanyaAdmin"><a href="#"><i class="icon icon-comment"></i> <span>Tanya Admin</span></a> </li>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> </div>
  </div>
<!--End-breadcrumbs-->
  
<!--Action boxes-->
 <?php $status = $this->session->flashdata("statusjoin"); ?>
 <div class="container-fluid" style="padding-left:50px;"><hr>
    
    <div class="row-fluid">
      <div class="span5">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Join Kelas</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo site_url();?>/Siswa/joinClassProcess" >
              <div class="control-group">
                <label class="control-label">ID Kelas</label>
                <div class="controls">
                  <input type="text" name="idkelas" autocomplete="off">
                </div>
              </div>
  
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" name="password" autocomplete="off">
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Buat" class="btn btn-success">
                <input type="Reset" value="Reset" class="btn btn-warning">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div id="myModalwe" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="font-size:21px;">Maaf , Kelas tidak ditemukan</h3>
              </div>
              <br>
              <ul>
                <li>Pastikan ID kelas x yang anda terima telah benar</li>
                <li>Pastikan password kelas anda telah benar </li>
                <li>Hubungi admin untuk keperluan lebih lanjut</li>
              </ul>
              <div class="modal-body">
               <h7 style="font-weight: 900;"></h7>
                
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Mengerti</a> </div>
          </div>
   

<!--end-main-container-part-->

<!--Footer-part-->



<!--end-Footer-part-->
<
<script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    var Welcome = "<?php echo $status; ?>";
    if(Welcome == 'false'){
       $('#myModalwe').modal('toggle');
       $('#myModalwe').modal('show');
    }
});
</script>
<script src="<?php echo base_url();?>/resource/siswa/js/excanvas.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.interface.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.chat.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.validate.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.popover.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>/resource/siswa/js/matrix.tables.js"></script> 
</body>
</html>



