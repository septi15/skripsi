<?php include 'header.php';
include 'sidebar.php';
include '../koneksi.php';

$query_select = "SELECT * FROM user_login " ;
$result = $koneksi->query($query_select);
$i = 0;
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <h4 class="card-title">List Users</h4>
                            </div> 
                        </div> 
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>  

                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            No Hp
                          </th>
                          <th>
                            Nama Lengkap
                          </th>
                          <th>
                            Edit User
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result->num_rows > 0) { 
                        
                        while($row = $result->fetch_assoc()) {  
                            $i = $i + 1;
                          echo "<tr>" ;
                          echo "<td>".$i."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['no_hp']."</td>";
                          echo "<td>".$row['nama_lengkap']."</td>";
                          echo "<td><a href='edit_user.php?id=".$row['id']."' class='btn btn-warning'>Edit</a> || <a href='delete_user.php?id=".$row['id']."' class='btn btn-danger' onclick='return checkDelete()'>Delete</a> </td>";
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
  <script language="JavaScript" type="text/javascript">
  function checkDelete(){
    return confirm('delete user?');  
  }
</script>
  <script src="../src/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../src/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../src/vendors/chart.js/Chart.min.js"></script>
  <script src="../src/vendors/select2/select2.min.js"></script>
  <script src="../src/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../src/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- Plugin js for this page -->

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

  <!-- End custom js for this page--> 
   <script src="../src/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../src/js/dashboard.js"></script>
  <script src="../src/js/Chart.roundedBarCharts.js"></script>
  <script src="../src/js/file-upload.js"></script>
  <script src="../src/js/typeahead.js"></script>
  <script src="../src/js/select2.js"></script>
</body>

</html>