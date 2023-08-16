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
      <h4>AL-KHAIRAAT</h4>
    </div>

    <!-- Login Form -->
    <form method="post" action="action_lupa_password.php" onsubmit="return validateForm()">
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Silahkan masukan email E-Mail"><br/>
      <input type="password" id="password1" class="fadeIn second" name="password1" placeholder="Password"><br/>
      <input type="password" id="password2" class="fadeIn second" name="password2" placeholder="Confrim Password"><br/>
      <input type="submit" class="fadeIn fourth" value="Submit">
    </form>
    <br>
  </div>
</div>
</body>  
</html>  




<script>  
    function validateForm() {
      const password = document.getElementById("password1").value;
      const confirmPassword = document.getElementById("password2").value;

      if (password !== confirmPassword) {
        alert("Passwords tidak sama ");
        return false;
      }
      else {
        alert("Pasword berhasil diganti");
        return true;
      }

      return true;
    }
  
 </script>