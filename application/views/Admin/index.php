<?php
	//reload session time
	if($this->session->tempdata('username') != '') {
		$this->session->set_tempdata('username',$this->session->tempdata('username'),60*10);
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/resource/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>/resource/admin/plugins/jQuery/jquery-2.2.3.min.js"></script> 
</head>

<body class="layout-boxed hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- header -->
<?php
	echo $header;
	echo $sidebar;
	echo $konten;
	echo $sidebar_control;
	echo $footer;
?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>/resource/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>/resource/admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/resource/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/resource/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/resource/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/resource/admin/dist/js/demo.js"></script>
</body>
</html>