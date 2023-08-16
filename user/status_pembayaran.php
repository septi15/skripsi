<?php include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$no_hp =  $_SESSION['nohp'];
$id_siswa = array();
$query_select = "SELECT * FROM pendaftaran_siswa_baru a join pembayaran b on a.id_siswa_baru = b.id_siswa_baru where a.no_handphone ='$no_hp' ";
$result_pembayaran = $koneksi->query($query_select);


?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <h4 class="card-title">Status Pembayaran</h4>
                            </div>  
                        </div> 
             
                  <div class="table-responsive" id="table-pembayaran">
                    <table class="table table-striped" id="table-1">
                      <thead>
                           
                        <tr>
                          <th>
                            No Registrasi
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Status Pembayaran
                          </th>
                          <th>
                           Sisa Bayar
                          </th>
                          <th>
                           Pembayaran
                          </th>
                          <th>
                           Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                            
                      if ($result_pembayaran->num_rows > 0) {
                        while($row = $result_pembayaran->fetch_assoc()) {  
                        
                          echo "<tr>" ;
                          echo "<td>".$row['id_siswa_baru']."</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "<td>".$row['status']."</td>";
                          echo "<td>".$row['sisa_bayar']."</td>";
                          $query = "SELECT * FROM hasil_test where id_siswa_baru ='$row[id_siswa_baru]' ";
                            $result = $koneksi->query($query);
                            if ($result) {
                              if ($result->num_rows > 0) {
  
                                $rows = $result->fetch_assoc();
                                $value = $rows['status'];
                              } else {
                                echo "No results found.";
                              }
                            }
                          if ($value == 'belum_lulus'){
                            echo "<td>Calon Siswa Belum melakukan tes </td>";
                            echo "<td>Proses pembayaran tersedia jika sudah lulus </td>";
                            echo "</tr>";
                          }else{
                            if ($row['sisa_bayar'] == 0 && $row['status']== 'lunas'){
                              echo "<td>Proses pembayaran Lunas</td>";
                              echo "<td><a class='btn btn-success me-2' href='../surat.php?id=$row[id_siswa_baru]&nama_lengkap=$row[nama_lengkap]&nik=$row[nik_calon_siswa]'> Print Bukti</a></td>";
                            }else if ($row['sisa_bayar'] == 0 && $row['status']== 'pelunasan'){
                              echo "<td>Proses pembayaran Lunas</td>";
                              echo "<td>Proses Pelunasan dalam proses </td>";
                            }else if ($row['sisa_bayar'] == 7050000 && $row['status']== ''){
                                echo "<td>Silakan melakukan pembayaran</td>";
                                echo "<td><a class='btn btn-success me-2' href='pembayaran.php?id=$row[id_siswa_baru]'> Pembayaran</a> </td>";
                            }else if ($row['sisa_bayar'] <= 3000000 && $row['status']== ''){
                              echo "<td>Proses pembayaran dalam proses konfirmasi</td>";
                              echo "<td></td>";
                            }else if ($row['sisa_bayar'] <= 3000000 && $row['status']== 'belum_lunas'){
                              echo "<td><a class='btn btn-success me-2' href='update_pembayaran.php?id=$row[id_siswa_baru]'> Pelunasan </a>  </td>";
                              echo "<td><a class='btn btn-success me-2' href='../surat.php?id=$row[id_siswa_baru]&nama_lengkap=$row[nama_lengkap]&nik=$row[nik_calon_siswa]'> Print Bukti</a></td>";
                            }else{
                            echo "<td><a class='btn btn-success me-2' href='pembayaran.php?id=$row[id_siswa_baru]'> Pembayaran</a>  </td>";
                            echo "<td>Lakukan Pembayaran Minimal</td>";
                            }
                          
                          echo "</tr>";
                          }
                         
                         }
                        };
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
  <!-- container-scroller -->
  
<script>
// JavaScript code to hide the div based on PHP variable value
var hideDiv = <?php echo $hideDiv ? 'true' : 'false'; ?>;
console.log(hideDiv);
if (hideDiv) {
  var div = document.getElementById('table-pembayaran');

  div.style.display = 'none';
}
else {
    var div = document.getElementById('not_role');
    div.style.display = 'none';
}
</script>
  <!-- plugins:js -->
  <script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>

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
  <script src="../css/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../css/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../css/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <script src="../js/modules-datatables.js"></script>
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