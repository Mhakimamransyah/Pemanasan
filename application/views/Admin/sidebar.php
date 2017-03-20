  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>resource/admin/dist/img/<?php echo $model->getAva();?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
		  <i class="text-success">Halo</i>
          <p><?php echo $model->getNama();?></p>       		  		  
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id='siswa' class="treeview <?php echo $menu=='siswa'? "active" : ""?>">
          <a href="#">
            <i class="ion ion-android-contact"></i> <span>Siswa</span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $submenu=='semua'? "class='active'" : ""?> id='siswa-all'><a href="<?php echo site_url();?>/Admin/page/siswa/semua"><i class="ion ion-android-contacts"></i> Lihat Semua</a></li>
            <li <?php echo $submenu=='tambah'? "class='active'" : ""?> id='siswa-add'><a href="<?php echo site_url();?>/Admin/page/siswa/tambah"><i class="ion ion-android-person-add"></i> Tambah </a></li>
          </ul>
        </li>
        <li id='guru' class="treeview <?php echo $menu=='guru'? "active" : ""?>">
          <a href="#">
            <i class="ion ion-woman"></i>
            <span>Guru</span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $submenu=='semua'? "class='active'" : ""?> id='guru-all'><a href="<?php echo site_url();?>/Admin/page/guru/semua"><i class="ion ion-ios-people"></i> Lihat Semua</a></li>
            <li <?php echo $submenu=='tambah'? "class='active'" : ""?> id='guru-add'><a href="<?php echo site_url();?>/Admin/page/guru/tambah"><i class="ion ion-ios-personadd"></i> Tambah </a></li>
          </ul>
        </li>
        <li id='wali' class="treeview <?php echo $menu=='wali'? "active" : ""?>">
          <a href="#">
            <i class="ion ion-person"></i>
            <span>Wali Murid</span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $submenu=='semua'? "class='active'" : ""?> id='wali-all'><a href="<?php echo site_url();?>/Admin/page/wali/semua"><i class="ion ion-person-stalker"></i> Lihat Semua</a></li>
            <li <?php echo $submenu=='tambah'? "class='active'" : ""?> id='wali-add'><a href="<?php echo site_url();?>/Admin/page/wali/tambah"><i class="ion ion-person-add"></i> Tambah </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>