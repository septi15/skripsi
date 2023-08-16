<?php
 // Check If form submitted, insert form data into users table
 if(!empty($_POST))
 
    {
        include '../koneksi.php';
    $id_siswa_baru = noreg();
    //DATA AYAH
    $namaayah = $_POST['namaayah'];
    $tempatayah = $_POST['tempatayah'];
    $tlayah = $_POST['tlayah'];
    $pekerjaanayah = $_POST['pekerjaanayah'];
    $pendidikanayah = $_POST['pendidikanayah'];
    $penghasilanayah = $_POST['penghasilanayah'];

    //DATA IBU
    $namaibu = $_POST['namaibu'];
    $tempatibu = $_POST['tempatibu'];
    $tlibu = $_POST['tlibu'];
    $pekerjaanibu = $_POST['pekerjaanibu'];
    $pendidikanibu = $_POST['pendidikanibu'];
    $penghasilanibu = $_POST['penghasilanibu'];
    
    inputdataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,$namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu);
    //DATA MURID
     $nikcamur = $_POST['nikcamur'];
     //Upload Files 
     $target_upload = '../upload_berkas/';
     $test= $_FILES['kk']['tmp_name'];
     $kk = $target_upload."KK_".$nikcamur."_".$_FILES['kk']['name'];
     $kia = $target_upload."KIA_".$nikcamur."_".$_FILES['kia']['name'];
     $akta = $target_upload."AKTA_".$nikcamur."_".$_FILES['akta']['name'];
     $filename_kk = "KK_".$nikcamur."_".$_FILES['kk']['name'];
     $filename_kia = "KIA_".$nikcamur."_".$_FILES['kia']['name'];
     $filename_akta = "AKTA_".$nikcamur."_".$_FILES['akta']['name'];
     $temp_kia = $_FILES['kia']['tmp_name'];
     $temp_kk = $_FILES['kk']['tmp_name'];
     $temp_akta = $_FILES['akta']['tmp_name'];
     $Terupload1 = Move_uploaded_file($temp_kk, $kk);
     $Terupload2 = Move_uploaded_file($temp_kia, $kia);
     $Terupload3 = Move_uploaded_file($temp_akta, $akta);

     //Get Data Murid 
     $nikcamur = $_POST['nikcamur'];
     $namalengkapcamur = $_POST['namalengkapcamur'];
     $jeniskelamin = $_POST['jeniskelamin'];
     $tempat = $_POST['tempat'];
     $tl = $_POST['tl'];
     $alamat = $_POST['alamat'];
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];

     
     review($id_siswa_baru);
     // include database connection file
     
     
     $sql = "INSERT INTO pendaftaran_siswa_baru VALUES('$id_siswa_baru','$nikcamur','$namalengkapcamur','$jeniskelamin','$tempat','$tl','$alamat','$nohp','$email','$filename_kk','$filename_kia','$filename_akta',now())";

     
     if ($koneksi->query($sql) == TRUE) {
        //echo "berhasil";
        header("location:index.php");
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
     
    $koneksi->close();

}

 
function noreg(){
    include '../koneksi.php';
    $query_select = "SELECT id_siswa_baru from pendaftaran_siswa_baru ORDER by id_siswa_baru desc limit 1";
    $result = $koneksi->query($query_select);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = substr($row['id_siswa_baru'],5);
            $id = $id + 1;
            $digit = strlen((string)$id);
            if ($digit == 1){
                $id = "000".$id;  
            }
            elseif($digit == 2){
                $id = "00".$id;
              
            }
            elseif($digit == 3){
                $id = "0".$id;
                
            }else {
                $id = $id;
            }
            $id_siswa_baru = "ALKH-".$id;
        }
    }
    else {
        $id_siswa_baru = "ALKH-0001";
    }
    echo $id_siswa_baru;
    return $id_siswa_baru;
 }
 function review($id_siswa_baru){
    include '../koneksi.php';
    $sql = "INSERT INTO status_review VALUES('','$id_siswa_baru','','proses review')";
    if ($koneksi->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
   $koneksi->close();
 }

function inputdataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,$namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu){
    include '../koneksi.php';
    $sql = "INSERT INTO data_orang_tua VALUES('','$id_siswa_baru','$namaayah','$tempatayah','$tlayah','$pekerjaanayah','$pendidikanayah','$penghasilanayah',
    '$namaibu','$tempatibu','$tlibu,','$pekerjaanibu','$pendidikanibu','$penghasilanibu',now())";
    if ($koneksi->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
   $koneksi->close();
   return $sql;
 }
 ?> 