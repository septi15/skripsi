<?php include 'header.php';
include '../koneksi.php';
$id = $_GET['id'];
$query_select = "SELECT * FROM pendaftaran_siswa_baru where id_siswa_baru = '$id'";
$result = $koneksi->query($query_select);
?>
<?php include 'sidebar.php';?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Proses Pembayaran</h2>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action_pembayaran.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="formpembayaran">
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Uang Pangkal </label>
                          <input type="number" class="form-control" id="uang_pangkal" name="uang_pangkal" placeholder="Uang Pangkal" value="0" min=2500000>
                          <input type="hidden" class="form-control" id="id_siswa_baru" name="id_siswa_baru" value="<?php echo $id;?>" readonly><br>
                          <input type="button" class="btn btn-primary me-2" id="pangkal" value="bayar minimal"> 
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 5.000.000 </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Kegiatan </label>
                          <input type="number" class="form-control" id="kegiatan" name="kegiatan" placeholder="Uang kegiatan" value="0" min=500000> <br>
                          <input type="button" class="btn btn-primary me-2" id="kegiatan_minimal" value="bayar minimal"> 
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 1.000.000 </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Spp </label>
                          <input type="number" class="form-control" id="spp" name="spp" placeholder="SPP" value="300000" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 300.000 </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Seragam </label>
                          <input type="number" class="form-control" id="seragam" name="seragam" placeholder="Seragam" value="300000" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 300.000 </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Uang Buku </label>
                          <input type="number" class="form-control" id="uang_buku" name="uang_buku" placeholder="Uang Buku" value="250000" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 250.000 </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                          <label for="exampleInputUsername1"> Biaya Admin </label>
                          <input type="number" class="form-control" id="biaya_admin" name="biaya_admin" value="200000" readonly>
                        </div>
                        <div class="col-md-3">
                            <br><br>
                          <label for="exampleInputUsername1"> Rp. 200.000 </label>
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
                          <label for="exampleInputUsername1"> Silahkan kirim total pembayaran ke Nomor Virtual Account Mandiri (12881298919298) </label>
                     
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
  document.getElementById("seragam"),
  document.getElementById("uang_pangkal"),
  document.getElementById("spp"),
  document.getElementById("uang_buku"),
  document.getElementById("kegiatan"),
  document.getElementById("biaya_admin"),
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
      totalField.value = "";
    }
  }
  function validateForm() {
  let x = document.forms["formpembayaran"]["bukti_pembayaran"].value;
  if (x == "") {
    alert("Bukti Bayar belum diupload ");
    return false;
  }else{
    alert("Silahkan cek status pembayaran dalam 1 hari ");
    return true;
  }
}

        // Get references to the input and button elements
        var input_1 = document.getElementById('uang_pangkal');
        var input_2 = document.getElementById('kegiatan');
        var button_1 = document.getElementById('pangkal');
        var button_2 = document.getElementById('kegiatan_minimal');
        

        // Add a click event listener to the button
        button_1.addEventListener('click', function() {
            // Change the value of the input field
            input_1.value = '2500000';
            updateTotal();
        });
        button_2.addEventListener('click', function() {
            // Change the value of the input field
            input_2 .value = '500000';
            updateTotal();
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
