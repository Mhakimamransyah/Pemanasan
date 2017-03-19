<!DOCTYPE html>
<html lang="en">
<head>
<title>Siswa | Profile</title>
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
<<<<<<< HEAD
     <li><img src="<?php echo base_url();?>/resource/siswa/img/user.jpg" style="width: 202px;
=======
     <li><img src="<?php echo base_url();?>/resource/siswa/img/fotosiswa/<?php echo $model->getFoto();?>" style="width: 202px;
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
    padding: 8px;
    height: 215px; margin-top: -80px"></li>
     <li id="Beranda"><a href="<?php echo site_url(); ?>/Siswa/index/main"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
     <li id="Pelajaran"><a href=""><i class="icon icon-book"></i> <span>Pelajaran</span><span class="label label-important">3</span></a> </li>
     <li id="Kelas" class="submenu"> <a href="#"><i class="icon icon-group"></i> <span>Kelas</span></a>
      <ul>
        <li id="KelasX"><a href="">X (sepuluh)</a></li>
        <li id="KelasXI"><a href="">XI (sebelas)</a></li>
        <li id="KelasXII"><a href="">XII (duabelas)</a></li>
      </ul>
     <li class="active"><a href="<?php echo site_url(); ?>/Siswa/index/profile"><i class="icon icon-user"></i> <span>Profile</span></a> </li>
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
  <div class="container-fluid" id="mainAction">
     <table style="font-size:25px;" cellpadding="10px">
     <tr>
     	<td colspan="3">
     		<h1>PROFIL SISWA</h1>
     	</td>
     </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">NAMA
     	 	</td>
     	 	<td>:</td>
     	 	<td>
     	 		<?php echo $model->getNama();?>
     	 	</td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">TTL
     	 	</td>
     	 	<td>:</td>
     	 	<td>
     	 		<?php echo $model->getTtl();?>
     	 	</td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">NOMOR HP
     	 	</td>
     	 	<td>:</td>
     	 	<td>
     	 		<?php echo $model->getKontak();?>
     	 	</td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">NISN</td>
     	 	<td>:</td>
     	 	<td><?php echo $model->getNisn();?></td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">ALAMAT</td>
     	 	<td>:</td>
     	 	<td><?php echo $model->getAlamat();?></td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">JURUSAN</td>
     	 	<td>:</td>
     	 	<td><?php echo $model->getJurusan();?></td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">WALI KELAS</td>
     	 	<td>:</td>
     	 	<td></td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">WALI MURID</td>
     	 	<td>:</td>
     	 	<td></td>
     	 </tr>
     	 <tr>
     	 	<td style="font-weight: bold;">ASAL SMP</td>
     	 	<td>:</td>
     	 	<td><?php echo $model->getAsalSmp();?></td>
     	 </tr>
     </table>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
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



