<?php
 // Check If form submitted, insert form data into users table.
 if(!empty($_POST))
    {
    $id_siswa_baru = $_POST['id_siswa_baru'];
    $test_ulang = $_POST['test_ulang'];
    $nomor1 = $_POST['nomor1'];
    $nomor2 = $_POST['nomor2'];
    $nomor3 = $_POST['nomor3'];
    $nomor4 = $_POST['nomor4'];
    $nomor5 = $_POST['nomor5'];
    $nomor6 = $_POST['nomor6'];
    $nomor7 = $_POST['nomor7'];
    $nomor8 = $_POST['nomor8'];
    $nomor9 = $_POST['nomor9'];
    $nomor10 = $_POST['nomor10'];
    $nomor11 = $_POST['nomor11'];
    $nomor12 = $_POST['nomor12'];
    $nomor13 = $_POST['nomor13'];
    $nomor14 = $_POST['nomor14'];
    $nomor15 = $_POST['nomor15'];
    $nomor16 = $_POST['nomor16'];
    $nomor17 = $_POST['nomor17'];
    $nomor18 = $_POST['nomor18'];
    $nomor19 = $_POST['nomor19'];
    $nomor20 = $_POST['nomor20'];
    $nilai = 0;
    $hasil_jawaban = [$nomor1,$nomor2,$nomor3,$nomor4,$nomor5,$nomor6,$nomor7,$nomor8,$nomor9,$nomor10,$nomor11,$nomor12,$nomor13,$nomor14,$nomor15,$nomor16,$nomor17,$nomor18,$nomor19,$nomor20];
    $jawaban = ['b','a','d','a','c','b','a','d','c','b','a','d','a','d','b','d','b','a','a','b'];
    foreach($hasil_jawaban as $key=>$value){
        if($value==$jawaban[$key]){
            $nilai = $nilai + 5;
        }
    }
    

    if ($nilai >= 65){
        $hasil = 'lulus';
    }
    else {
        $hasil = 'belum_lulus';
    }
     // include database connection file
     include '../koneksi.php';
     $sql = "UPDATE hasil_test SET nilai=$nilai, status='$hasil' where id_siswa_baru='$id_siswa_baru'";
    if ($koneksi->query($sql) == TRUE) {
       // echo "New record created successfully".$test_ulang;
       tambah_pembayaran($id_siswa_baru);
       header("location:index.php");
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
     
    
     
    $koneksi->close();
 }
 
 function tambah_pembayaran($id_siswa_baru){
    $cek_pembayarans = cek_pembayaran($id_siswa_baru);
    if ($cek_pembayarans){
        echo "do nothing";
    }
    else {
        $sql = "INSERT INTO pembayaran VALUES('','$id_siswa_baru',0,0,0,0,0,0,7050000,'','',now())";
        include '../koneksi.php';
   
        if ($koneksi->query($sql) == TRUE) {
           echo 'berhasil';
           //header("location:index.php");
         } else {
             echo "Error" . $sql . "<br>" . $koneksi->error;
         }
    }

    
 }

  function cek_pembayaran($id_siswa_baru){
    include '../koneksi.php';
    $cek = "SELECT * FROM pembayaran where id_siswa_baru = '$id_siswa_baru' ";
    $result_cek = $koneksi->query($cek);
     if ($result_cek->num_rows > 0) {
        return true;
     }else{
        return false;
     }
  }
 ?> 