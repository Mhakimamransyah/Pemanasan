<!DOCTYPE html>
<html lang="en">
<head>
<title>Siswa | Kelas Sepuluh</title>
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
        <li class="active" id="KelasX"><a href="<?php echo site_url();?>/Siswa/index/X">X (sepuluh)</a></li>
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
  <?php 
        
       $success = $this->session->flashdata("berhasil");

       $class =  $model->getClass();
       if($class != "no"){

      ?>
<!--Action boxes-->
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
           <div class="widget-box">
          <div class="widget-title" style="height: 150px;"> <!-- <span class="icon"> <i class="icon-file"></i> </span> -->
            <table cellpadding="3" style="margin-left: 9px;font-size:16px">
                <tr>
                    <td>Nama</td>
                    <td>: </td>
                    <td><?php echo $class["Nama_kelas_X"]; ?></td>
                </tr>
                <tr>
                    <td>Ketua Kelas</td>
                    <td>: </td>
                    <td><?php echo $class["Nama"]; ?></td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>: </td>
                    <td><?php echo $class["ruangan"]; ?></td>
                </tr>
                <tr>
                    <td>Wali Kelas</td>
                    <td>: </td>
                    <td><?php echo $class["Wali_kelas"]; ?></td>
                </tr>
                <tr>
                    <td>ID kelas</td>
                    <td>: </td>
                    <td><?php echo $class["Id_kelas_x"]; ?></td>
                </tr>

            </table>
          </div>
          <div class="widget-content nopadding">
            <ul class="recent-posts">
              <li style="    height: 70px;">
                <div class="article-post">
                  <div class="fr"><a href="#" class="btn btn-primary btn-mini">Lihat</a> &nbsp; <a href="#" class="btn btn-danger btn-mini">Hapus</a></div>
                  <span class="user-info" style="font-size: 20px;
                    font-weight: bold;"> Fisika </span>
                  <p>    
                    Ini Adalah mata pelajaran fisika , dimana kegiatan belajar mengajar melibatkan kegiatan praktikum dan teori di kelas. Mata pelajaran ini dikerjakan setiap hari rabu jam kedua dan diajar oleh Bpk. Rusdianto Kirano         
                  </p>
                </div>
              </li>
              <li style="    height: 70px;">
                <div class="article-post">
                  <div class="fr"><a href="#" class="btn btn-primary btn-mini">Lihat</a> &nbsp; <a href="#" class="btn btn-danger btn-mini">Hapus</a></div>
                  <span class="user-info" style="font-size: 20px;
                    font-weight: bold;"> Biologi </span>
                  <p>    
                    Ini Adalah mata pelajaran biologi , dimana kegiatan belajar mengajar melibatkan kegiatan praktikum dan teori di kelas. Mata pelajaran ini dikerjakan setiap hari rabu jam kedua dan diajar oleh Bpk. Busdianta Kirona         
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
<?php } 
else{

?>
<div style="padding: 15px;">
   <h1>Maaf , </h1>
   <h3>Anda Belum terdaftar di kelas X manapun.</h3>
   <h3>Anda dapat bergabung dengan kelas yang telah ada atau </h3>
   <h3>Buat sebuah kelas baru.</h3>
   <a href="<?php echo site_url();?>/Siswa/index/newClass"><button class="btn btn-large btn-success">Buat Kelas Baru</button></a>
   <a href="<?php echo site_url();?>/Siswa/index/joinClass"><button class="btn btn-large btn-primary">Gabung Kelas Lain</button></a>
</div>
<?php 
}
?>

         <div id="myModalwe" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="font-size:21px;">Selamat , Sebuah Grup Kelas Telah dibuat!!</h3>
              </div>
              <div class="modal-body">
               <h7 style="font-weight: 900;"></h7>
                <ul>
                    <li>Anda merupakan ketua kelas dari grup kelas ini</li>
                    <li>Sebagai ketua kelas anda dapat mengundang wali kelas , teman dan guru mata pelajaran ke dalam grup ini</li>
                    <li>Gunakan ID kelas dan Password yang telah anda buat agar orang lain dapat join di kelas ini</li>
                    <li>Pastikan informasi yang anda buat sesuai dengan keadaan aslinya</li>
                    <li>Untuk kepentingan lebih lanjut silahkan hubungi admin</li>
                </ul>
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Mengerti</a> </div>
          </div>

          <div id="myModalwe2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="font-size:21px;">Selamat , Anda telah ditambahkan ke dalam kelas</h3>
              </div>
              <div class="modal-body">
               <h7 style="font-weight: 900;"></h7>
                <ul>
                    <li>Anda merupakan anggota kelas dari grup kelas ini</li>
                    <li>Pastikan informasi yang anda buat sesuai dengan keadaan aslinya</li>
                    <li>Untuk kepentingan lebih lanjut silahkan hubungi admin</li>
                </ul>
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Mengerti</a> </div>
          </div>


<!--end-main-container-part-->

<!--Footer-part-->



<!--end-Footer-part-->
</script>
<script type="text/javascript">
    
    var Welcome = "<?php echo $success; ?>";
    if(Welcome == 'true'){
       $('#myModalwe').modal('toggle');
       $('#myModalwe').modal('show');
    }
    else if(Welcome == 'join'){
       $('#myModalwe2').modal('toggle');
       $('#myModalwe2').modal('show');
    }

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



