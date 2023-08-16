<?php

$id = $_GET['id'];
echo $id;
include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$id_reg = 'kosong';
$query_select = "SELECT * FROM pendaftaran_siswa_baru a join data_orang_tua b on a.id_siswa_baru = b.id_siswa_baru where a.id_siswa_baru = '$id'";
$result = $koneksi->query($query_select);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Review Formulir</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                           
                        <tr>
                          <th>
                            Keterangan
                          </th>
                          <th>
                           Value
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {  
                        
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
                          echo "<td>NIK Calon Murid</td>";
                          echo "<td>".$row['nik_calon_siswa']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Tempat Tanggal Lahir</td>";
                          echo "<td>".$row['tempat']." ".$row['tanggal_lahir']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Jenis Kelamin</td>";
                          echo "<td>".$row['jenis_kelamin']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Alamat</td>";
                          echo "<td>".$row['alamat_lengkap']."</td>";                        
                          echo "</tr>";

                          
                          echo "<tr>" ;
                          echo "<td>No Handphone</td>";
                          echo "<td>".$row['no_handphone']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>Email</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>KK </td>";
                          echo "<td><a class='btn btn-success me-2' href=../upload_berkas/".rawurlencode($row['kartu_keluarga']).">Lihat berkas</a></td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>KIA </td>";
                          echo "<td><a class='btn btn-success me-2' href=../upload_berkas/".rawurlencode($row['kia']).">Lihat berkas</a></td>";
                          echo "</tr>";

                          echo "<tr>" ;
                          echo "<td>AKTA </td>";
                          echo "<td><a class='btn btn-success me-2' href=../upload_berkas/".rawurlencode($row['akta_kelahiran']).">Lihat berkas</a></td>";
                          echo "</tr>";
                         }?>
                          <form action="review_detail_action.php" method="post" onsubmit="return validateForm();">
                          <input id="idreg" name="idreg" value="<?php echo $id_reg;?>" type="hidden">
                          <tr>
                          <td>Status</td>
                          <td>
                          <div class="row">
                            <div class="col-md-2">
                              <input type="radio" class="form-check-input" id="status" name="status" value="lengkap">
                              <label for="form-check-label1"> Lengkap </label>
                            </div>
                            <div class="col-md-2">
                              <input type="radio" class="form-check-input" id="status" name="status" value="belum lengkap">
                              <label for="form-check-label2"> Belum Lengkap</label>
                            </div>
                          </div>

                          </td>
                          </tr>
                          <tr>

                          <tr>
                          <td>Keterangan</td>
                          <td><input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></td>
                          </tr>

                         
                          <td><button type="submit" name="Submit" class="btn btn-primary me-2">Submit</button> </td>
                          <td></td>
                          </tr>
                       <?php };
                       
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
            alert("Pilih status berkas");
            return false;
        }
        else{
          alert("Berkas terkonfirmasi")
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