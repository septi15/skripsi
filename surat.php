<?php
include 'koneksi.php';
$id = $_GET['id'];
$nama = $_GET['nama_lengkap'];
$nik = $_GET['nik'];
$query = "SELECT * FROM pendaftaran_siswa_baru a join pembayaran b on a.id_siswa_baru = b.id_siswa_baru where a.id_siswa_baru = '$id'" ;
$result = $koneksi->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $total = $row['pangkal'] + $row['buku'] + $row['seragam'] + $row['biaya_admin'] + $row['spp'] + $row['kegiatan'];
        $kurang_bayar = $row['sisa_bayar'];
        $total = number_format($total, 2, '.', ',');
        $pangkal = number_format($row['pangkal'], 2, '.', ',');
        $kegiatan = number_format($row['kegiatan'], 2, '.', ',');
        $spp = number_format($row['spp'], 2, '.', ',');
        $buku = number_format($row['buku'], 2, '.', ',');
        $seragam = number_format($row['seragam'], 2, '.', ',');
        $admin = number_format($row['biaya_admin'], 2, '.', ',');
        $sisa_bayar = number_format($row['sisa_bayar'], 2, '.', ',');

    }
}
 ?>
<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
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
        <td rowspan="3">  <img src= './img/logo.ico'></td>
         <td><center> <h3>SEKOLAH DASAR ISLAM TERPADU (SDIT) </h3></center></td>
         
   
      </tr>
      <tr>
        <td><center><h2>AL-KHAIRAAT</h3></center></td>
      </tr>
      <tr>
        
         <td> Jl. Masjid Condet RT. 15/03 Batu Ampar, Kramat Jati, Jakarta Timur 13520 </td>
   
      </tr>
  </table>
  <hr width="600px">

  <center>
  <h4><u>Surat Keterangan</u></h4>
    <table style="padding-right: 25px;" >
        <tr>
            <td>Yang bertanda tangan dibawah ini, SDIT AL-KHAIRAAT dengan ini menerangkan  </td>
            
        </tr>
        <tr>
            <td>bahwa calon siswa dengan data  berikut:</td></td>
        </tr>
    </table>
    <p>  </p>     <p></p></center>
    <table align="center" style="padding-right: 290px;" >
        <tr>
            <td width="160px">
                No Registrasi 
            </td>
            <td>
                : 
            </td>
            <td> 
                <?php echo $id;?>
            </td>
        </tr>
        <tr>
            <td width="160px">
                Nama 
            </td>
            <td>
                : 
            </td>
            <td> 
                <?php echo $nama;?>
            </td>
        </tr>
        <tr>
            <td width="160px">
                NIK 
            </td>
            <td>
                : 
            </td>
            <td> 
                <?php echo $nik;?>
            </td>
        </tr>
       
    </table><br>
    <center>
    <table style="padding-right: 280px;"> 
        <tr>
            <td>
            Dengan detail Pembayaran sebagai berikut :
            </td>
        </tr> 
    </table><br>
    <table class="table table-hover" border="1" width="30%" >
                <tr>
                    <th>Detail</th>
                    <th>Biaya</th>
                    <th>Status</th>
                        
                <tr>
                <td>
                   Uang Pangkal  
                </td>
                <td>
                  <?php echo $pangkal;?>  
                </td>
                <td align="center">
                 <?php if ($pangkal == '5,000,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Uang Kegiatan  
                </td>
                <td>
                  <?php echo $kegiatan;?>  
                </td>
                <td align="center">
                 <?php if ($kegiatan == '1,000,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Uang Seragam  
                </td>
                <td>
                  <?php echo $seragam;?>  
                </td>
                <td align="center">
                 <?php if ($seragam == '300,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Uang SPP  
                </td>
                <td>
                  <?php echo $spp;?>  
                </td>
                <td align="center">
                 <?php if ($spp == '300,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Uang Buku  
                </td>
                <td>
                  <?php echo $buku;?>  
                </td>
                <td align="center">
                 <?php if ($buku == '250,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Biaya Administrasi  
                </td>
                <td>
                  <?php echo $admin;?>  
                </td>
                <td align="center">
                 <?php if ($admin == '200,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
                </tr>
                <tr>
                <td>
                   Total  
                </td>
                <td>
                  <?php echo $total;?>  
                </td>
                <td align="center">
                 <?php if ($total == '7,050,000.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
            </tr>
            <tr>
                <td>
                   Total sisa pembayaran  
                </td>
                <td>
                  <?php echo $sisa_bayar;?>  
                </td>
                <td align="center">
                 <?php if ($sisa_bayar == '0.00'){
                    echo "Lunas";
                 }else {
                    echo "Belum Lunas";
                 }?>
                </td>
            </tr>
        </table></center><br>
    <table align="center" style="padding-left: 30px;">
        <tr>
            <td>
            Dengan surat ini sebagai bukti telah melaksanakan proses penerimaan peserta siswa baru.<br>
        Demikian surat keterangan ini dibuat agar dipergunakan sebagaimana mestinya untuk  <br> kepentingan selanjutnya
            </td>
        </tr>
    </table>
    
  </body>
  <!--<script>window.print();</script>-->
</html>
