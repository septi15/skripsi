<?php include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$query_select = "SELECT * FROM admin_login " ;
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
                              <h4 class="card-title">Status Pendaftaran</h4>
                            </div>  
                            <div class="col-md-4">
                                <input class="form-control" type="text" id="search" onkeyup="myFunction()" placeholder="Search" />
                            </div>
                            <div class="col-md-2">
                              <input type="button" class="btn btn-primary me-2" id="regisadmin" data-toggle="modal" value="Add User" data-target="#pendaftaranadmin" >
                            </div>
                        </div> 
                  <div class="table-responsive">
                    <table class="table table-striped sampleTable" id="list_siswa">
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
                            Role
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
                            $i = $i + 1;
                          echo "<tr>" ;
                          echo "<td>".$i."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['no_handphone'];
                          echo "<td>".$row['role']."</td>";
                          echo "<td><a href='delete_user.php? id=$row[id]'>Delete</a> || <a href='edit_user.php? id=$row[id]'>Edit</a> <td>";
                          
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
  <div id="pendaftaranadmin" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title text-center"> Registrasi</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body">
   <form method="post" id="registrasi">
   <div class="form-group">
        <div class="form-group">
          <label for="exampleInputUsername1"> No Handphone</label><br>
          <input type="text" class="fadeIn second" id="nohp" name="nohp" placeholder="No Handphone"><br>
        <div class="form-group">
          <label for="exampleInputUsername1"> Email</label><br>
          <input type="email" class="fadeIn third" id="email" name="email" placeholder="E-Mail">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Password</label>
          <input type="password" class="fadeIn fourth" id="passwordreg" name="passwordreg" placeholder="Password">
        </div>
        <input type="submit" name="bt_registrasi" id="bt_registrasi" value="Registrasi" class="btn btn-primary me-2">
      </div>
      </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
  <!-- container-scroller -->
  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("list_siswa");
  tr = table.getElementsByTagName("tr");
  //td = tr.getElementsByTagName("td");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}

</script>
<script type="text/javascript">
             
             $(document).ready(function() {
                 $(".list_siswa").fancyTable({
                   /* Column number for initial sorting*/
                    sortColumn:0,
                    /* Setting pagination or enabling */
                    pagination: true,
                    /* Rows per page kept for display */
                    perPage:3,
                    globalSearch:true
                    });
                              
             });
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