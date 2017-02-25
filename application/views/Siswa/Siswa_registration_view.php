<!DOCTYPE html>
<html>
<head>
  <title>Siswa | Registrasi</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</head>
<body style="background-color: cornsilk;">
 
 <div align="center" style="padding: 87px;">
   	  <div class="container" style="    background-color:white; border: 2px solid white; border-radius: 19px;">
  
  <form class="form-horizontal">
     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-9">
        <h1>Registrasi Siswa</h1>
      </div>
     <br><br><br><br>
  </form>   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nisn">NISN:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="nisn" placeholder="Enter NISN">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">
      </div> 
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="kontak">Kontak:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="kontak" name="kontak" placeholder="Enter Contact">
      </div> 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Address">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Jurusan:</label>
        <div class="radio-inline col-sm-1">
         <label><input type="radio" name="jurusan">IPA</label>
      </div>
        <div class="radio-inline col-sm-1">
          <label><input type="radio" name="jurusan">IPS</label>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="smp">SMP:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="smp" name="smp" placeholder="Enter Junior High School">
      </div>
    </div>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-9">
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="reset" class="btn btn-warning">Reset</button>
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

