<style type="text/css">
	#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background:url(<?php echo base_url(); ?>/images/background.jpg);
 	font-family: 'Oxygen', sans-serif;
	    background-size: cover;
}

.main{
 	margin:50px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

</style>
<head>
  <title>Siswa | Masuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.css">
  <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
</head>

<body>
   <?php 
       $timeout =  $this->session->flashdata('message');  
    ?>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center" style="background-color: brown">
				<h1><center>Login Siswa</center></h1>

					<form id="loginSiswa" class="" method="post" >						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">NISN</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nisn" id="nisn"  placeholder="Enter your NISN" autocomplete="off"/>
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"  />
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Login">
						    <button type="button" id="registration" class="btn btn-warning btn-lg btn-block login-button">Registrasi Akun Siswa</button>
						    <button type="button" id="home" class="btn btn-info btn-lg btn-block login-button">Home</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/toastr.js"></script>
    <script src="<?php echo base_url(); ?>/js/toastr.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
	</body>


<script type="text/javascript">

  toastr.options.preventDuplicates = true;
  toastr.options.timeOut = 500;
   

  var temp = "x";
  var Rto = temp.concat("<?php echo $timeout; ?>");
  if(Rto != 'x'){
    toastr.options.timeOut = 3000;
    toastr.warning("<?php echo $timeout; ?>","SORRY");
  }


  $("#loginSiswa").on('submit',function(e){
  e.preventDefault();
  
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Siswa/loginProcess",
       data  : $('#loginSiswa').serialize(),
       beforeSubmit : function(data){
           
       },
       success : function(data){
         if(data == 0){
              window.location.href = "<?php echo site_url();?>/Siswa/index";
         }
         else{
             toastr.error("Username or Password","ERROR");
         }
        },
        error : function(data){
        }
   })
})

 $("#registration").click(function(){
 	window.location.href = "<?php echo site_url();?>/Siswa/register";
 })
 $("#home").click(function(){
 	 window.location.href = "http://localhost/Pemanasan";
 })
</script>

