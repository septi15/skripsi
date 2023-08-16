<?php include 'header.php';
include '../koneksi.php';
$id = $_GET['id'];
$pangkal= 0;
$query_select = "SELECT * FROM pendaftaran_siswa_baru a join pembayaran b on a.id_siswa_baru = b.id_siswa_baru where a.id_siswa_baru = '$id'";
$result = $koneksi->query($query_select);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {  
        $spp = $row['spp'];
        $pangkal_old = $row['pangkal'];
        $buku = $row['buku'];
        $seragam = $row['seragam'];
        $admin = $row['biaya_admin'];
        $kegiatan_old = $row['kegiatan'];
    }


}
$pangkal = 5000000 - $pangkal_old;
$spp = 300000 - $spp; 
$buku = 250000 - $buku;
$seragam = 300000 - $seragam; 
$kegiatan = 1000000 - $kegiatan_old;
$admin = 200000 - $admin; 
$total = $pangkal + $spp + $buku + $seragam + $admin + $kegiatan;
?>
<?php include 'sidebar.php';?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Proses Sisa Pembayaran</h2>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action_update_pembayaran.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="formpelunasan">
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Uang Pangkal </label>
                          <input type="number" class="form-control" id="uang_pangkal" name="uang_pangkal" placeholder="Uang Pangkal" max="<?php echo $pangkal;?>">
                          <input type="hidden" class="form-control" id="id_siswa_baru" name="id_siswa_baru" value="<?php echo $id;?>" readonly>
                          <input type="hidden" class="form-control" id="pangkal_old" name="pangkal_old" value="<?php echo $pangkal_old;?>" readonly>
                          <input type="hidden" class="form-control" id="kegiatan_old" name="kegiatan_old" value="<?php echo $kegiatan_old;?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> <?php $pangkal = number_format($pangkal, 2, '.', ',');echo "Rp. ". $pangkal;?> </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Kegiatan </label>
                          <?php if ($kegiatan == 0){
                             echo "<input type='number' class='form-control' id='kegiatan' name='kegiatan' placeholder='Uang kegiatan' value='0' readolny>";
                          }else{
                            echo "<input type='number' class='form-control' id='kegiatan' name='kegiatan' placeholder='Uang kegiatan' >";
                          }?>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> <?php $kegiatan = number_format($kegiatan, 2, '.', ',');echo "Rp. ". $kegiatan; ?> </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Total</label>
                          <input type="number" class="form-control" id="total" name="total" placeholder="Total" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Silahkan kirim total Nomor Virtual Account Mandiri (12881298919298) </label>
                     
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Bukti Pembayaran </label>
                          <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control">
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" name="Submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
  // Get references to the input and total fields
  const inputFields = [ 
  document.getElementById("uang_pangkal"),
  document.getElementById("kegiatan"),
  ];
  const totalField = document.getElementById("total");

  // Add an event listener to the input field to update the total when input changes
  inputFields.forEach((inputField) => {
    inputField.addEventListener("input", updateTotal);
  });

  function updateTotal() {
    // Get the values from the input fields and convert them to numbers
    const values = inputFields.map((inputField) => parseFloat(inputField.value));
    
    // Check if all values are valid numbers
    if (values.every((value) => !isNaN(value))) {
      // Calculate the total
      const total = values.reduce((sum, value) => sum + value, 0);
      console.log(total);
      // Set the total field value
      totalField.value = total;
    } else {
      // If any input value is not a valid number, reset the total field
      console.log("eka");
      totalField.value = "";
    }


  }
  
  function validateForm() {
  let x = document.forms["formpelunasan"]["bukti_pembayaran"].value;
  if (x == "") {
    alert("Bukti Bayar belum diupload ");
    return false;
  }else{
    alert("Silahkan cek status pembayaran dalam 1 hari ");
    return true;
  }
 
  }
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
