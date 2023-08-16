<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the user's email from the form
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    $passwordmd5 = md5($_POST['password1']);

    include 'koneksi.php';
     
    $sql = "update user_login set password='$passwordmd5' where email='$email'";
    if ($koneksi->query($sql) == TRUE) {
      
       header("location:index.php");
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
    
   $koneksi->close();
}
?>