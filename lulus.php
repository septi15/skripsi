<!DOCTYPE html>  
<html>  
 <head>  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/login.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="img/logo.ico">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<!------ Include the above in your HEAD tag ---------->
</head>  
 <body>  
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/al-khairaat.svg" id="icon" alt="User Icon" /> <br/>
      <h4>AL-KHAIRAAT</h4><br>
      <?php $id = $_GET['id'];
      echo "<h3> Selamat Anda LULUS $id </h3>";?>
   
      <input type="button" name="print" onload="window.print()" value="print" id="print"  class="btn-success">

    </div>
   
    <!-- Login Form -->




  </div>
</div>
</body>  
</html>  