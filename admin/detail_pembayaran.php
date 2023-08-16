<?php

$id = $_GET['id'];
include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$id_reg = 'kosong';
$query_select = "SELECT * FROM pendaftaran_siswa_baru a join pembayaran b on a.id_siswa_baru = b.id_siswa_baru where a.id_siswa_baru = '$id'";
$result = $koneksi->query($query_select);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Detail Pembayaran</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                           
                        <tr>
                          <th>
                            Detail Biaya
                          </th>
                          <th>
                           Jumlah
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {  
                            $pangkal = number_format($row['pangkal'], 2, '.', ',');
                            $kegiatan = number_format($row['kegiatan'], 2, '.', ',');
                            $spp = number_format($row['spp'], 2, '.', ',');
                            $buku = number_format($row['buku'], 2, '.', ',');
                            $seragam = number_format($row['seragam'], 2, '.', ',');
                            $admin = number_format($row['biaya_admin'], 2, '.', ',');
                            $sisa_bayar = number_format($row['sisa_bayar'], 2, '.', ',');
                            $total = $row['pangkal'] + $row['buku'] + $row['seragam'] + $row['biaya_admin'] + $row['spp'] + $row['kegiatan'];
                            $total = number_format($total, 2, '.', ',');
                            $status = $row['status'];
                          echo "<tr>" ;
                          echo "<td>No Registrasi</td>";
                          echo "<td>".$row['id_siswa_baru']."</td>";
                          $id_reg = $row['id_siswa_baru'];
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Nama Lengkap Calon Murid</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang Pangkal</td>";
                          echo "<td>Rp. ".$pangkal."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang Kegiatan</td>";
                          echo "<td>Rp. ".$kegiatan."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang SPP</td>";
                          echo "<td>Rp. ".$spp."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang Administrasi</td>";
                          echo "<td>Rp. ".$admin."</td>";                        
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang Seragam</td>";
                          echo "<td>Rp. ".$seragam."</td>";                        
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Uang Buku</td>";
                          echo "<td>Rp. ".$buku."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Total Yang Harus dibayar</td>";
                          echo "<td>Rp. 7,050,000.00 </td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Total Yang Sudah dibayar</td>";
                          echo "<td>Rp. ".$total."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Sisa yang Harus dibayar</td>";
                          echo "<td>Rp. ".$sisa_bayar."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Status</td>";
                          echo "<td>".$row['status']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Bukti Bayar </td>";
                          echo "<td><a class='btn btn-success me-2' href=../pembayaran/".rawurlencode($row['bukti_bayar']).">Lihat berkas</a></td>";
                          echo "</tr>";
                         } if ($status == 'lunas' && $sisa_bayar = '0.00'){ 
                          echo "<tr>" ;
                          echo "<td></td>";
                          echo "<td></td>";
                          echo "</tr>";
                         }else {

                        
                         ?>
                         <form action="update_pembayaran.php" method="post" onsubmit="return validateForm();">
                          <input id="id" name="id" value="<?php echo $id_reg;?>" type="hidden">
                          <tr>
                          <td>Status</td>
                          <td>
                          <div class="row">
                            <div class="col-md-2">
                              <input type="radio" class="form-check-input" id="status" name="status" value="lunas">
                              <label for="form-check-label1"> Lunas </label>
                            </div>
                            <div class="col-md-2">
                              <input type="radio" class="form-check-input" id="status" name="status" value="belum_lunas">
                              <label for="form-check-label2"> Belum Lunas</label>
                            </div>
                           
                          </div>

                          </td>
                          </tr>
                          <tr>

                         
                          <td><button type="submit" name="Submit" class="btn btn-primary me-2">Submit</button> </td>
                          <td></td>
                          </tr>
                          
                        <?php  } 
                        }
                       
                         ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       

      <?php include 'footer.php';?>
</div>
        </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script>
  function validateForm() {
    var gender = document.getElementsByName('status');
        var genValue = false;

        for(var i=0; i<gender.length;i++){
            if(gender[i].checked == true){
                genValue = true;    
            }
        }
        if(!genValue){
            alert("Pilih status pembayaran");
            return false;
        }
        else{
          alert("Pembayaran terkonfirmasi")
          return true;
        }
}
</script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../src/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../src/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../src/vendors/chart.js/Chart.min.js"></script>
  <script src="../src/vendors/select2/select2.min.js"></script>
  <script src="../src/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../src/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../src/js/off-canvas.js"></script>
  <script src="../src/js/hoverable-collapse.js"></script>
  <script src="../src/js/template.js"></script>
  <!-- <script src="../src/js/settings.js"></script> -->
  <script src="../src/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../src/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../src/js/dashboard.js"></script>
  <script src="../src/js/Chart.roundedBarCharts.js"></script>
  <script src="../src/js/file-upload.js"></script>
  <script src="../src/js/typeahead.js"></script>
  <script src="../src/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>