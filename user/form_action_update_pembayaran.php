<?php
 // Check If form submitted, insert form data into users table.
 if(!empty($_POST))
    {
    $id_siswa_baru = $_POST['id_siswa_baru'];

    $pangkal = $_POST['uang_pangkal'];
    $pangkal_old = $_POST['pangkal_old'];
    $kegiatan_old = $_POST['kegiatan_old'];
    $kegiatan =$_POST['kegiatan'];
    $target_upload = '../pembayaran/';
    $bukti_bayar = $target_upload.$id_siswa_baru."_".$_FILES['bukti_pembayaran']['name'];
    $temp_bukti = $_FILES['bukti_pembayaran']['tmp_name'];
    $filename_bukti = $id_siswa_baru."_".$_FILES['bukti_pembayaran']['name'];
    $Terupload1 = Move_uploaded_file($temp_bukti, $bukti_bayar);
     // include database connection file
    $total = 1050000 + $pangkal + $kegiatan + $pangkal_old + $kegiatan_old;
    $kurang_bayar = 7050000 - $total;
     include '../koneksi.php';
     $pangkal = $pangkal + $pangkal_old;
     $kegiatan = $kegiatan + $kegiatan_old;
     $cek_pembayarans = cek_pembayaran($id_siswa_baru);
     if ($cek_pembayarans){
        $sql = "UPDATE pembayaran SET pangkal='$pangkal',kegiatan='$kegiatan',bukti_bayar='$filename_bukti',sisa_bayar='$kurang_bayar',status='pelunasan' where id_siswa_baru='$id_siswa_baru'";
      if ($koneksi->query($sql) == TRUE) {
         //echo "$total";
         header("location:index.php");
       } else {
           echo "Error" . $sql . "<br>" . $koneksi->error;
       }
     $koneksi->close();
  
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