<!DOCTYPE html>
<html>
<head>
  <title>Siswa | Registrasi</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
  <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/toastr.css">
  <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
</head>
<body style="background:url(<?php echo base_url(); ?>/resource/siswa/img/registBackground.jpg);">
 
 <div align="center" style="padding: 87px;">
   	  <div class="container" style="    background-color:white; border: 2px solid white; border-radius: 19px;">
  
  <form id="siswaRegisterForm"  action="<?php echo site_url();?>/Siswa/registerProcess" enctype="multipart/form-data" method="post" class="form-horizontal">
     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-9">
        <h1>Registrasi Siswa</h1>
      </div>
     <br><br><br><br>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nisn">NISN:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Enter NISN">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" autocomplete="off" >
      </div> 
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="nama">TTL:</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="ttl" name="ttl">
      </div> 
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="kontak">Kontak:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="kontak" name="kontak" placeholder="Enter Contact" autocomplete="off">
      </div> 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Address" autocomplete="off">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Jurusan:</label>
        <div class="radio-inline col-sm-1">
         <label><input type="radio" name="jurusan" value="IPA">IPA</label>
      </div>
        <div class="radio-inline col-sm-1">
          <label><input type="radio" name="jurusan" value="IPS">IPS</label>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="smp">SMP:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="smp" name="smp" placeholder="Enter Junior High School" autocomplete="off">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="smp">Foto:</label>
      <div class="col-sm-3">
       <img src="" style="width: 146px;
    height: 141px;
    margin-left: -118px;" id="gambar1">
           <br><br>
        <input type="file"  class="form-control" name="inputimg1" class="inputWrapper" id="inputGambar1" required>
      </div>
    </div>    
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
        title="Password harus berisikan kombinasi 1 angka dan 1 huruf besar dan kecil" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="pwd" name="confirmpass" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
      </div>
    </div>
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-9">
        <input type="submit" name="submit" class="btn btn-primary" value="Register">
        <button type="reset" class="btn btn-warning">Reset</button>
        <a href="<?php echo site_url();?>/Siswa/index"><button type="button" class="btn" style="width: 92px;">Back</button></a>
      </div>
     <br><br><br><br>
  </form>
   <div class="col-sm-offset-2 col-sm-9" >
       	 <p>By clicking the register button, you agree for the term and privacy policy provided by us</p>
     </div>
    </div>
</div>
   </div>

</body>
</html>

<script type="text/javascript">
 $("#inputGambar1").change(function(){
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("inputGambar1").files[0]);
      oFReader.onload = function (oFREvent){
         if($('#gambar1').attr('src') == ""){
             document.getElementById("gambar1").src = oFREvent.target.result;
        }
        }
   });

//   $("#siswaRegisterForm").on('submit',function(e){
//   e.preventDefault();
  
//    $.ajax({
//        type : "post", 
//        url  : "<?php echo site_url();?>/Siswa/registerProcess",
//        data  : $('#siswaRegisterForm').serialize(),
//        beforeSubmit : function(data){
           
//        },
//        success : function(data){
//         if(data == 1){
//             alert("success in model");     
//          }
//          else if(data==3){
//              alert("kolom jurusan atau lainnya ada yang tidak terisi");
//          }
//          else{
//                alert(data);
//          }
//         },
//         error : function(data){
//         } 
//    })
// })

</script>