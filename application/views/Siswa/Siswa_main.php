<!DOCTYPE html>
<html lang="en">
<head>
<title>Siswa | Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="<?php echo base_url();?>/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
<<<<<<< HEAD
=======
<script src="<?php echo base_url(); ?>/js/toastr.js"></script>
<script src="<?php echo base_url(); ?>/js/toastr.min.js"></script>
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
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
<<<<<<< HEAD

=======
<?php $welcome = $this->session->flashdata("welcome"); ?>
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
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
     <li id="Beranda" class="active"><a href="<?php echo site_url(); ?>/Siswa/index/"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
     <li id="Pelajaran"><a href=""><i class="icon icon-book"></i> <span>Pelajaran</span><span class="label label-important">3</span></a> </li>
     <li id="Kelas" class="submenu"> <a href="#"><i class="icon icon-group"></i> <span>Kelas</span></a>
      <ul>
        <li id="KelasX"><a href="">X (sepuluh)</a></li>
        <li id="KelasXI"><a href="">XI (sebelas)</a></li>
        <li id="KelasXII"><a href="">XII (duabelas)</a></li>
      </ul>
     <li><a href="<?php echo site_url(); ?>/Siswa/index/profile"><i class="icon icon-user"></i> <span>Profile</span></a> </li>
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
   
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="<?php echo site_url(); ?>/Siswa/index/"> <i class="icon-home"></i> Beranda</a></li>
        <li class="bg_ly span3"> <a href="#"> <i class="icon-book"></i><span class="label label-success">101</span>Pelajaran</a></li>
        <li class="bg_lo span2" > <a href="<?php echo site_url(); ?>/Siswa/index/profile"> <i class="icon-user"></i>Profile</a></li>
        <li class="bg_ls span3"> <a href="#"> <i class="icon-group"></i>Kelas</a></li>
        <li class="bg_ls span2"> <a href="#"> <i class="icon-leaf"></i>Guru</a></li>
        <li class="bg_lb span2"> <a href="#"> <i class="icon-envelope-alt"></i><span class="label label-important">20</span>Pesan</a></li>
        <li class="bg_lg span2"> <a href="#"> <i class="icon-comment"></i>Tanya Admin</a></li>
      </ul>
    </div>
<!--End-Action boxes-->    

<!--End-Chart-box--> 
    <hr/>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Aktivitas Pelajaran</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <div class="article-post"> <span class="user-info"> <b> <a href="#" style="color:red">Fisika / Tugas Di Kelas</a></b> </span>
                  <p>Asslamaualaikum wr.wb. hari ini ibuk tidak masuk di karenakan ada urusan keluarga yang mendadak , mohon agar kerjakan tugas di akhir slide berikut ini </p>
                  <p><u>02-01-2017</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> 19:00</u></p>
                </div>
              </li>
              <li>
                <div class="article-post"> <span class="user-info"><b><a href="#">Kimia / Tugas Kelompok</a></b> </span>
                  <p>Bagi Kelompok untuk persentasi besok</p>
                  <p><u>02-01-2017</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> 15:45</u></p>
                </div>
              </li>
              <li>
                <div class="article-post"> <span class="user-info"> <b><a href="#">Bahasa Indonesia / Notifikasi</a></b></span>
                  <p>Bagi yang belum mengumpulkan tugas harian harap dikumpulkan segera karean itu akan di ambil nilai ulangan</p>
                  <p><u>02-01-2017</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> 13:20</u></p>
                </div>
              </li>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
            </ul>
          </div>
        </div>

      
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>Pesan Masuk</h5> 
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            <div class="new-update clearfix"><i class="icon-comment"></i>
              <div class="update-done"><strong style="color : red">Bu Joko </strong> 
              <a href=""><span>baca pesan</span></a></div>
              <div class="update-date"><span class="update-day">20</span>jan</div>
            </div>
            <div class="new-update clearfix"><i class="icon-comment"></i>
              <div class="update-done"><strong>Chandra</strong><a href=""><span>baca pesan</span></a></div>
              <div class="update-date"><span class="update-day">2</span>jan</div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<<<<<<< HEAD

<!--end-Footer-part-->
=======
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
          <div id="myModalwe" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="font-size:21px;">Selamat Datang di SIMAK SMA N 69 Palembang</h3>
              </div>
              <div class="modal-body">
               <h7 style="font-weight: 900;">Aturan main sistem</h7>
                <ul>
                  <li>Sistem ini digunakan untuk seluruh siswa yang terdaftar di SMA N 69</li>
                  <li>Sistem ini digunakan untuk membantu segala aktivitas belajar dan mengajar siswa di sekolah</li>
                  <li>Sistem ini tidak diperuntukkan sebagai pengganti tatap muka guru dan siswa di kelas</li>
                  <li>Data wali murid dan wali kelas belum diisi , silahkan kordinasi dengan guru atau ketua kelas</li>
                  <li>Setiap siswa harus bertanggung jawab terhadap data yang diisikannnya</li>
                  <li style="color:red">Setiap kegiatan curang dalam bentuk hacking , deface , cracking , dsbg akan diberikan sanksi pemberhentian</li>
                  <li>Anda dapat menghubungi admin melalui sistem untuk keperluan lebih lanjut</li>
                </ul>
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Mengerti</a> </div>
            </div>


<!--end-Footer-part-->
<script type="text/javascript">
  
  var temp = "x";
  var Welcome = temp.concat("<?php echo $welcome; ?>");
  if(Welcome != 'x'){
       $('#myModalwe').modal('toggle');
       $('#myModalwe').modal('show');
  }

</script>

>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
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



