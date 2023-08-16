<?php
include 'header.php';
include 'sidebar.php';
include '../koneksi.php';

$query_select = "SELECT * FROM data_siswa ";
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
                              <h4 class="card-title">Data siswa SDIT</h4>
                            </div>  

                        </div> 
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                           
                        <tr>
                          <th>
                            NISN
                          </th>
                          <th>
                            Nama Lengkap 
                          </th>
                          <th>
                            NIK
                          </th>
                          <th>
                            Kelas
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {  
                        
                          echo "<tr>" ;
                          echo "<td>".$row['nisn']."</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "<td>".$row['nik']."</td>";
                          echo "<td>".$row['kelas']."</td>";                      
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