<!DOCTYPE HTML>
<html>
<head>
<title>Sistem Informasi Akademik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sistem Informasi Akademik" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>/bootstrapGuru/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>/bootstrapGuru/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>/bootstrapGuru/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/bootstrapGuru/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url(); ?>/bootstrapGuru/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url(); ?>/bootstrapGuru/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url(); ?>/bootstrapGuru/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url(); ?>/bootstrapGuru/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
<!-- sidebar start -->
<?php
	include("sidebar.php");
?>
<!-- sidebar end -->

<!-- header start-->
<?php
	include("header.php");
?>
<!-- header end -->

<!-- konten start -->
<?php
	include("konten.php");
?>
<!-- konten end -->

<!-- footer start -->
<?php
	include("footer.php");
?>
<!-- footer end -->

<>
    </section>
  
<script src="<?php echo base_url(); ?>/bootstrapGuru/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>/bootstrapGuru/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>/bootstrapGuru/js/bootstrap.min.js"></script>
</body>
</html>