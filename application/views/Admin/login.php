<?php 
	$timeout;
	if($this->session->tempdata('username') != null) {
		redirect(site_url(). '/Admin');	
	} else {
		$timeout = $this->session->flashdata('message');
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
	<div>
		<a href="<?php echo base_url(); ?>"><span class="fa fa-home"></span></a>      |      <b>Admin</b>
	</div>	
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to your account</p>

    <form id='login'>
      <div class="form-group has-feedback">
        <input required type="text" name='username' class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required type="password" name='password' class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>resource/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>resource/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>resource/admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>/js/toastr.js"></script>
<script src="<?php echo base_url(); ?>/js/toastr.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

<script>
toastr.options.preventDuplicates = true;
toastr.options.timeOut = 500;

var Rto = "<?php echo $timeout; ?>";
if(Rto != ''){
	toastr.options.timeOut = 3000;
	toastr.warning("<?php echo $timeout; ?>","SORRY");
}

$("#login").on('submit',function(e){
  e.preventDefault();
  
   $.ajax({
       type : "post",
       url  : "<?php echo site_url();?>/Admin/loginProcess",
       data  : $('#login').serialize(),
       beforeSubmit : function(data){
           
       },
       success : function(data){
         if(data == 1){
              window.location.href = "<?php echo site_url();?>/Admin";
         } else if(data == 0){
             toastr.error("Username or Password","ERROR");
         } else {
			 toastr.warning(data);
		 }
        },
        error : function(data){
        }
   })
})
</script>