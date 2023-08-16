<?php
 // Check If form submitted, insert form data into users table.

 if(!empty($_POST))
{
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];
     $nama_lengkap = $_POST['nama_lengkap'];
     $password = $_POST['passwordreg'];
     $pass = MD5($password);
     
     
 
     // include database connection file
     include 'koneksi.php';
    
     // Insert user data into table
     
     $sql = "UPDATE admin_login set email='$email', nama_lengkap='$nama_lengkap', password='$pass', no_handphone='$nohp' where id='$id' ";
     //echo $koneksi->$result;
     // Show message when user added
     //echo $sql;
 
     if ($koneksi->query($sql) == TRUE) {
        //echo "New record created successfully";
        echo "<script>alert('Data user Berhasil diubah');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
    
    /*   if ($koneksi->$result){
        echo "eka";
        echo "<script type ='text/JavaScript'>alert('Calon Siswa .'$namalengkapcamur'. Berhasil Terdaftar ')</script>";
     }
    else {
        echo "failed";
    }*/
     
    $koneksi->close();
 }
 ?>