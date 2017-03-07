<!DOCTYPE html>
<html lang="en">
<head>
<title>Siswa | Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css/matrix-media.css" />
<link href="<?php echo base_url();?>/resource/siswa/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>/resource/siswa/css//jquery.gritter.css" />
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
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">M. Hakim Amransyah</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
     <li><img src="<?php echo base_url();?>/resource/siswa/img/user.jpg" style="width: 202px;
    padding: 8px;
    height: 215px; margin-top: -80px"></li>
     <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
     <li><a href="#"><i class="icon icon-book"></i> <span>Pelajaran</span><span class="label label-important">3</span></a> </li>
     <li class="submenu"> <a href="#"><i class="icon icon-group"></i> <span>Kelas</span></a>
      <ul>
        <li><a href="">X</a></li>
        <li><a href="">XI</a></li>
        <li><a href="">XII</a></li>
      </ul>
     <li><a href="#"><i class="icon icon-user"></i> <span>Profile</span></a> </li>
     <li><a href="#"><i class="icon icon-leaf"></i> <span>Guru</span></a> </li>
     <li><a href="#"><i class="icon  icon-envelope-alt"></i> <span>Pesan</span><span class="label label-important">3</span></a> </li>
     <li><a href="#"><i class="icon icon-comment"></i> <span>Tanya Admin</span></a> </li>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
   
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-home"></i> Beranda</a></li>
        <li class="bg_ly span3"> <a href="#"> <i class="icon-book"></i><span class="label label-success">101</span>Pelajaran</a></li>
        <li class="bg_lo span2"> <a href="#"> <i class="icon-user"></i>Profile</a></li>
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

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
