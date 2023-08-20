<?php
include '../koneksi.php';
$label = $_GET['label'];
setlocale(LC_ALL, 'id_ID.utf8');
$hariIni = new DateTime();
$hari_ing = date('l');
$hari_ind = hariIndo($hari_ing);
$tanggal =  strftime('%d-%m-%Y');
$query_total_date= "SELECT id_siswa_baru, nama_lengkap, date_time FROM pendaftaran_siswa_baru where date(date_time) = '$label'";
$result_tanggal = $koneksi->query($query_total_date);

function hariIndo ($hariInggris) {
    switch ($hariInggris) {
      case 'Sunday':
        return 'Minggu';
      case 'Monday':
        return 'Senin';
      case 'Tuesday':
        return 'Selasa';
      case 'Wednesday':
        return 'Rabu';
      case 'Thursday':
        return 'Kamis';
      case 'Friday':
        return 'Jumat';
      case 'Saturday':
        return 'Sabtu';
      default:
        return 'hari tidak valid';
    }
  }
 ?>
<html>
    <head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css"> 
    <style>
        body {
            font-family: 'Lexend Deca', sans-serif; 
            margin: auto;
            color: #000000;   
        }
    </style>
    </head>
  <body font-col>
    <table align="center" border="0">
      <tr>
        <td rowspan="3">  <img src= '../img/logo.ico'></td>
         <td><center> <h3>SEKOLAH DASAR ISLAM TERPADU (SDIT) </h3></center></td>
         
   
      </tr>
      <tr>
        <td><center><h2>AL-KHAIRAAT</h3></center></td>
      </tr>
      <tr>
        
         <td> Jl. Masjid Condet RT. 15/03 Batu Ampar, Kramat Jati, Jakarta Timur 13520 </td>
   
      </tr>
  </table>
  <hr width="800px">

  <center> 
  <h4>Report Pendaftaran Calon Siswa</h4>
    <table border="1" width="70%">
        
    <thead>
        <tr>
            <th width="10%">
                No 
            </th>
            <th width="30%">
                ID Pendaftaran
            </th>
            <th>
                Nama Siswa
            </th>
            <th>
                Tanggal Pendaftaran
            </th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0;
            if ($result_tanggal->num_rows > 0) {
                while ($row=$result_tanggal->fetch_assoc()) { 
            $i = $i + 1;
            echo "<tr align='center'>";
            echo "<td>".$i."</td>";
            echo "<td>".$row['id_siswa_baru']."</td>";
            echo "<td>".$row['nama_lengkap']."</td>";
            echo "<td>".date("d-m-Y", strtotime($row['date_time']) )."</td>";

            echo "</tr>";
                }
            }
            ?>
        </tbody>

    </table>
    <br>
   
   <br>
  
    <br>
    <table width="70%" >
        <tr>
            <td align="right" colspan="3" style="padding-bottom: 10px;">
                Jakarta, <?php echo $hari_ind ." ". $tanggal;?>
            </td>
        </tr>
        <tr>
            <td align="left" style="padding-left: 45px;">
                Dibuat Oleh,
            </td>
            <td></td>
            <td align="right" style="padding-right: 45px;">
                Mengetahui,
            </td>
        </tr>
        <tr>
            <td align="left" style="padding-left: 48px;">
                Bendahara
            </td>
            <td></td>
            <td align="right" style="padding-right: 35px;">
                Kepala sekolah
            </td>
        </tr>
        <tr>
            <td height="180px" width="40%">
                <hr style="width:90%;height:2px;margin-left:20;">
                <h5 style="margin-left:25;margin-top:0;"> HB. Habibi Saleh Al Jufri, S.M</h5>
            </td>
            <td>
               
            </td>
            <td width="40%">
            <hr style="width:100%;text-align:center;margin-left:18">
           <h5 style="margin-left:50;margin-top:0;"> Musman Sutiyono, S.T</h5>
            </td>
        </tr>
        
    </table>
    
  </body>
  <script>window.print();</script>
</html>
