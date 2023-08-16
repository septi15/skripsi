<?php include 'header.php';
 include 'sidebar.php';
include '../koneksi.php';
$i = 0;
$email = $_SESSION['email'];
$query_select = "SELECT role FROM admin_login where email = '$email' " ;
$result = $koneksi->query($query_select);
if ($result) {
    if ($result->num_rows > 0) {
        // Fetch the data (single row and single column)
        $row = $result->fetch_assoc();
        $value = $row['role']; // Replace 'column_name' with the actual column name

    } else {
        echo "No results found.";
    }

    // Free result set
    $result->free();
} else {
    echo "Error executing the query: " . $mysqli->error;
}
if ($value == 'bendahara'){

    $hideDiv = false;
}
else{
    $hideDiv = true;
}

$query = "SELECT * FROM pendaftaran_siswa_baru a join pembayaran b on a.id_siswa_baru = b.id_siswa_baru" ;
$result_bayar = $koneksi->query($query);



?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <h4 class="card-title">Pembayaran</h4>
                            </div>  

                        </div> 
                  <div class="table-responsive" id="table_show">
                    <table class="table table-striped" id="table-1">
                      <thead>
                           
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            ID Siswa Baru
                          </th>
                          <th>
                            Nama Lengkap
                          </th>
                          <th>
                            Kurang Bayar
                          </th>
                          <th>
                            Bukti Bayar
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result_bayar->num_rows > 0) { 
                        
                        while($row = $result_bayar->fetch_assoc()) {  
                            $i = $i + 1;
                          echo "<tr>" ;
                          echo "<td>".$i."</td>";
                          echo "<td>".$row['id_siswa_baru']."</td>";
                          echo "<td><a href='detail_pembayaran.php?id=".$row['id_siswa_baru']."'>".$row['nama_lengkap']."</td>";
                          echo "<td>".$row['sisa_bayar']."</td>";
                          echo "<td><a class='btn btn-success me-2' href=../pembayaran/".rawurlencode($row['bukti_bayar']).">Lihat Bukti</a></td>";
                          if ($row['status'] == '' && $row['sisa_bayar'] == 0){
                            echo "<td><a a class='btn btn-success me-2' href='update_pembayaran.php?id=".$row['id_siswa_baru']."&status=lunas'>Konfirmasi pembayaran </a></td>";
                          }
                          else if ($row['status'] == 'belum_lunas' && $row['sisa_bayar'] == 0){
                            echo "<td><a a class='btn btn-success me-2' href='update_pembayaran.php?id=".$row['id_siswa_baru']."&status=lunas'>Konfirmasi pembayaran </a></td>";
                          }
                          else if ($row['status'] == '' && $row['sisa_bayar'] > 0){
                            echo "<td><a a class='btn btn-success me-2' href='update_pembayaran.php?id=".$row['id_siswa_baru']."&status=belum_lunas'>Konfirmasi pembayaran</a></td>";
                          }
                          else if ($row['status'] == 'pelunasan' && $row['sisa_bayar'] > 0){
                            echo "<td><a a class='btn btn-success me-2' href='update_pembayaran.php?id=".$row['id_siswa_baru']."&status=belum_lunas'>Konfirmasi pembayaran</a></td>";
                          }
                          else if ($row['status'] == 'belum_lunas' && $row['sisa_bayar'] >= 3000000){
                            echo "<td>Sudah melakukan Pembayaran Minimal</a></td>";
                          }
                          else {
                            echo "<td>Pembayaran Terkonfirmasi</a></td>";
                          }
                          echo "</tr>";
                          
                         }
                        };
                         ?>
                        
                      </tbody>
                    </table>
                  </div>
                  <div id="not_role">
                    <h3> List Khusus Bendahara </h3>
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
// JavaScript code to hide the div based on PHP variable value
var hideDiv = <?php echo $hideDiv ? 'true' : 'false'; ?>;
console.log(hideDiv);
if (hideDiv) {
  var div = document.getElementById('table_show');

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