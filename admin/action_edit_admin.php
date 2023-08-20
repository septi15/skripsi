<?php
 // Check If form submitted, insert form data into users table.

 if(!empty($_POST))
{
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];
     $role = $_POST['role'];
     $password = $_POST['passwordreg'];
     $pass = MD5($password);
     // include database connection file
     include 'koneksi.php';
     // Insert user data into table
     $sql = "UPDATE admin_login set email='$email', role='$role', password='$pass', no_handphone='$nohp' where id='$id' ";
     if ($koneksi->query($sql) == TRUE) {
        echo "<script>alert('Data admin Berhasil diubah');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
    $koneksi->close();
 }
 ?>