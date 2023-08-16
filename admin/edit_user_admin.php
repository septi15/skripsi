<?php include 'header.php';
include 'sidebar.php';
include '../koneksi.php';
$id = $_GET['id'];
$query_select = "SELECT * FROM admin_login  where id ='$id' ";
$result_admin = $koneksi->query($query_select);
if ($result_admin->num_rows > 0) {
    while($row = $result_admin->fetch_assoc()) {  
        $email= $row['email'];
        $nohp = $row['no_handphone'];
        $password= md5($row['password']);
        $role= $row['role'];
    }
}
?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Data Pendaftaran</h4>
                  <p class="card-description">
                  </p>
                  <form method="post" id="registrasi" action='action_edit_admin.php'>

                    <div class="form-group">
                    <div class="row">
                            <div class="col-md-8">
                            <label for="exampleInputUsername1">Email</label><br>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $email;?>">
                            <input type="hidden" class="form-control" id="id" name="id" placeholder="E-Mail" value="<?php echo $id;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="exampleInputUsername1"> No Handphone</label><br>
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" value="<?php echo $nohp;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="exampleInputUsername1">Role</label>
                                <select id="role" name="role" class="form-control">
                                <option value="">Pilih Role</option>
                                <option <?=($role=='admin')?'selected="selected"':''?> value="admin">Admin</option>
                                <option <?=($role=='bendahara')?'selected="selected"':''?>value="bendahara">Bendahara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                            <div class="col-md-8">
                      <label for="exampleInputUsername1">Password</label>
                      <input type="password" class="form-control" id="passwordreg" name="passwordreg" placeholder="Password">
                        </div>
                    </div>
                    </div>
                    <input type="submit" name="bt_registrasi" id="bt_registrasi" value="Update" class="btn btn-primary me-2">
                  </div>
                  </form>
                </div>
              </div>
              </div>
          </div>
          </form>
        <?php include 'footer.php';?>
  </div>
</div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!--CUSTOM JS-->
  <script>
  function validateForm() {
  let x = document.forms["formpendaftaran"]["kk"].value;
  let y = document.forms["formpendaftaran"]["akta"].value;
  let z = document.forms["formpendaftaran"]["kia"].value;
  if (x == "") {
    alert("Kartu Keluarga belum di upload ");
    return false;
  }
  if (y == "") {
    alert("Akta belum di upload ");
    return false;
  }
  if (z == "") {
    alert("KIA belum di upload ");
    return false;
  }
  alert("Silahkan cek status pendaftaran dalam 1 hari ");
  return true;
}
</script>
<script>
  const myCheckbox = document.getElementById('validate');
  const myButton = document.getElementById('submit');

  myCheckbox.addEventListener('change', function() {
  myButton.disabled = !this.checked;
});
</script>
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
        <!-- content-wrapper ends -->
