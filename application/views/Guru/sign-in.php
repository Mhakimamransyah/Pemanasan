<!DOCTYPE HTML>
<html>
<head>
<title>Login | Guru</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>resource/Guru/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>resource/Guru/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>resource/Guru/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/Guru/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url(); ?>resource/Guru/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url(); ?>resource/Guru/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url(); ?>resource/Guru/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url(); ?>resource/Guru/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

<script type="text/javascript">
	function cekform()
	{
		if(!$("#username").val())
		{
			alert("Sorry,Your Username can't be empty");
			$("#username").focus();
			return false;
		}

		if(!$("#password").val())
		{
			alert("Sorry,Your Password can't be empty");
			$("#password").focus();
			return false;
		}
	}
</script>

</head> 
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to Teacher</p>
						</div>
						<div class="signin">
							<form action="<?php echo site_url(); ?>/Guru/home" method="post" onsubmit="return cekform();">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" name="username"  id="username" class="user" placeholder="Yourname" />
								</div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="password" id="password" class="lock" placeholder="Password">
								</div>
							</div>
							<input type="submit" value="Login to your account">
							</form>	 
						</div>
						<div class="new_people">
							<h4>For New Teacher</h4>
							<p></p>
							<a href="<?php echo site_url();?>/Guru/signup">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
			<?php
				include("footer.php");
			?>
        <!--footer section end-->
	</section>
	
<script src="<?php echo base_url(); ?>/resource/Guru/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>/resource/Guru/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>/resource/Guru/js/bootstrap.min.js"></script>
</body>
</html>