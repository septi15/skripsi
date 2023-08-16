<?php
include 'header.php';
include 'sidebar.php';
include '../koneksi.php';

$query_select = "SELECT * FROM pendaftaran_siswa_baru a join data_orang_tua b on a.id_siswa_baru = b.id_siswa_baru join status_review c on a.id_siswa_baru = c.id_siswa_baru ";
$result = $koneksi->query($query_select);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <h4 class="card-title">Status Pendaftaran</h4>
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
                            Nama Lengkap (Calon Siswa)
                          </th>
                          <th>
                            Nama Wali 
                          </th>
                          <th>
                            Keterangan
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
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {  
                        
                          echo "<tr>" ;
                          echo "<td>".$row['id_siswa_baru']."</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "<td>".$row['nama_ayah']. " / ".$row['nama_ibu']."</td>";
                          echo "<td>".$row['keterangan']."</td>";
                          echo "<td>".$row['status']."</td>";
                          if ($row['status']== "lengkap"){
                            echo "<td>Data Sudah lengkap</a>";
                          }else{
                            echo "<td><a href='review_detail.php? id=$row[id_siswa_baru]'>Review</a>";
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