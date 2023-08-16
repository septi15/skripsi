<?php include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$no_hp =  $_SESSION['nohp'];
$query_select = "SELECT a.id_siswa_baru as 'id_siswa_baru', a.nama_lengkap as 'nama_lengkap', b.nilai as 'nilai', b.status as 'status_nilai', c.status as 'status_berkas',b.test_ulang as 'test_ulang' FROM pendaftaran_siswa_baru a join hasil_test b on a.id_siswa_baru = b.id_siswa_baru join status_review c on b.id_siswa_baru = c.id_siswa_baru where a.no_handphone ='$no_hp' ";
$result_test = $koneksi->query($query_select);

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <h4 class="card-title">Status Test</h4>
                            </div>  
                        </div> 
             
                  <div class="table-responsive">
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
                            Nilai
                          </th>
                          <th>
                           Status
                          </th>
                          <th>
                           Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result_test->num_rows > 0) {
                        while($row = $result_test->fetch_assoc()) {  
                          
                          echo "<tr>" ;
                          echo "<td>".$row['id_siswa_baru']."</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "<td>".$row['nilai']."</td>";
                          echo "<td>".$row['status_nilai']."</td>";
                          if ($row['status_berkas']== 'belum_lengkap'){
                            echo "<td>Lengkapi Berkas sebelum melakukan test</td>";
                          }else if ($row['test_ulang'] == '' && $row['status_nilai']== ''){
                              echo "<td><a class='btn btn-success me-2' href='interview_test.php?id=$row[id_siswa_baru]&test=pertama&nilai=0'>Silahkan lakukan Test</td>";
                          }else if ($row['test_ulang'] == '' && $row['status_nilai']=='belum_lulus'){
                              echo "<td><a class='btn btn-success me-2' href='pengajuan_test.php?id=$row[id_siswa_baru]'>Lakukan Pengajuan test</td>";
                          }else if ($row['test_ulang'] == 'pengajuan test ulang' && $row['status_nilai']=='belum_lulus'){
                                echo "<td>Anda telah melakukan pengajuan test ulang mohon tunggu 1 hari</td>";
                          }else if ($row['test_ulang'] == 'confirm test ulang' && $row['status_nilai']=='belum_lulus'){
                              echo "<td><a class='btn btn-success me-2' href='interview_test.php?id=$row[id_siswa_baru]&test=ulang&nilai=$row[nilai]'>Silahkan lakukan Test ulang</td>";
                          }else{
                            echo "<td>Silahkan lanjutkan ke proses pembayaran</a>  </td>";
                          }
                          
                          echo "</tr>";
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