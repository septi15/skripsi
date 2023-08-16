<?php
 // Check If form submitted', insert form data into users table.
 

 function updateataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,
 $namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu){
    include '../koneksi.php';
    //$sql = "INSERT INTO data_orang_tua VALUES('','$id_siswa_baru','$namaayah','$tempatayah','$tlayah','$pekerjaanayah','$pendidikanayah','$penghasilanayah',
    //'$namaibu','$tempatibu','$tlibu,','$pekerjaanibu','$pendidikanibu','$penghasilanibu')";

    $sql = "UPDATE data_orang_tua SET 'nama_ayah'='$namaayah','tempat_ayah'='$tempatayah','tl_ayah'='$tlayah','pekerjaan_ayah'='$pekerjaanayah','pendidikan_ayah'='$pendidikanayah','penghasilan_ayah'='$penghasilanayah','nama_ibu'='$namaibu','tempat_ibu'='$tempatibu','tl_ibu'='$tlibu','pekerjaan_ibu'='$pekerjaanibu','pendidikan_ibu'='$pendidikanibu','penghasilan_ibu'=''$penghasilanibu WHERE id_siswa_baru='$id_siswa_baru'";
    if ($koneksi->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
   $koneksi->close();


 }
 function review($id_siswa_baru){
    include '../koneksi.php';
    //$sql = "INSERT INTO status_review VALUES('','$id_siswa_baru','sudah di perbaharui','belum_lengkap')";
    $sql = "UPDATE status_review SET keterangan='sudah diperbaharui' where id_siswa_baru='$id_siswa_baru'";
    if ($koneksi->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
   $koneksi->close();

 }
 if(!empty($_POST))
{
    $id_siswa_baru = $_POST['id_siswa_baru'];
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
    
    updateataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,
    $namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu);
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

     
 
     // include database connection file
     include '../koneksi.php';
     
     //'sql = "INSERT INTO pendaftaran_siswa_baru VALUES(''id_siswa_baru',''nikcamur',''namalengkapcamur',''$jeniskelamin',''$tempat',''$tl',''$alamat','$nohp','$email','$filename_kk','$filename_kia','$filename_akta')";
     $sql = "update pendaftaran_siswa_baru set nik_calon_siswa='$nikcamur',nama_lengkap='$namalengkapcamur',jenis_kelamin='$jeniskelamin',tempat='$tempat',tanggal_lahir='$tl',alamat_lengkap='$alamat',no_handphone='$nohp',email='$email',kartu_keluarga='$filename_kk',kia='$filename_kk',akta_kelahiran='$filename_kia' WHERE id_siswa_baru = '$id_siswa_baru'";
 

     if ($koneksi->query($sql) == TRUE) {
       review($id_siswa_baru);
        header("location:index.php");
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
     
    $koneksi->close();
 }
 ?> 