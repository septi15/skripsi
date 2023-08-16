<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Input Data Pendaftaran (Data Ayah)</h2>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="formpendaftaran">
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Nama </label>
                          <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Nama" size="15">
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatayah" name="tempatayah" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlayah" name="tlayah" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaanayah"name="pekerjaanayah" placeholder="Pekerjaan">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Pendidikan </label>
                          <select id="pendidikanayah" name="pendidikanayah" class="form-control">
                              <option value="">Pilih Pendidikan Terakhir Ayah</option>
                              <option value="sd">SD</option>
                              <option value="smp">SMP</option>
                              <option value="sma">SMA</option>
                              <option value="diploma">Diploma</option>
                              <option value="sarjana">Sarjana</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                          <label for="exampleInputUsername1">Penghasilan (Dalam Rupiah) </label>
                          <select id="penghasilanayah" name="penghasilanayah" class="form-control">
                              <option value="">Pilih Penghasilan Ayah</option>
                              <option value="0jt - 2.5jt">0jt - 2.5jt</option>
                              <option value="2.5jt - 5jt">2.5jt - 5jt</option>
                              <option value="5jt - 10jt">5jt - 10jt</option>
                              <option value="10jt - 20jt">10jt - 20jt</option>
                              <option value="20jt keatas">20jt keatas</option>
                          </select>                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                          <label for="exampleInputUsername1"> No Handphone</label>
                          <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $_SESSION['nohp'];?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Input Data Pendaftaran (Data Ibu)</h2>
                  <p class="card-description">
                  </p>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Nama </label>
                          <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Nama" size="15">
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatibu" name="tempatibu" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlibu" name="tlibu" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaanibu"name="pekerjaanibu" placeholder="Pekerjaan">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Pendidikan </label>
                          <select id="pendidikanibu" name="pendidikanibu" class="form-control">
                              <option value="">Pilih Pendidikan Terakhir Ibu</option>
                              <option value="sd">SD</option>
                              <option value="smp">SMP</option>
                              <option value="sma">SMA</option>
                              <option value="diploma">Diploma</option>
                              <option value="sarjana">Sarjana</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                          <label for="exampleInputUsername1">Penghasilan (Dalam Rupiah) </label>
                          <select id="penghasilanibu" name="penghasilanibu" class="form-control">
                              <option value="">Pilih Penghasilan Ibu</option>
                              <option value="0jt - 2.5jt">0jt - 2.5jt</option>
                              <option value="2.5jt - 5jt">2.5jt - 5jt</option>
                              <option value="5jt - 10jt">5jt - 10jt</option>
                              <option value="10jt - 20jt">10jt - 20jt</option>
                              <option value="20jt keatas">20jt keatas</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                          <label for="exampleInputUsername1"> No Handphone</label>
                          <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $_SESSION['nohp'];?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Data Pendaftaran</h4>
                  <p class="card-description">
                  </p>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> NIK (Calon Murid) <span class="mdi mdi-asterisk"></span></label>
                          <input type="text" class="form-control" id="nikcamur" name="nikcamur" placeholder="Nama Lengkap">
                        </div>
                    </div>
                        </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1"> Nama Lengkap (Calon Murid Sesuai Akta) <span class="mdi mdi-asterisk"></span></label>
                            <input type="text" class="form-control" id="namalengkapcamur"name="namalengkapcamur" placeholder="Nama Lengkap">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label  for="form-check-label"> Jenis Kelamin </label>
                      <div class="row">
                        <div class="col-md-2">
                          <input type="radio" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="lakilaki">
                          <label for="form-check-label1"> Laki-Laki</label>
                        </div>
                        <div class="col-md-2">
                          <input type="radio" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="perempuan">
                          <label for="form-check-label2"> Perempuan</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tl" name="tl" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Alamat Lengkap </label>
                      <div class="row">
                        <div class="col-md-6">
                              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                              <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>" readonly>
                            </div>  
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Upload Kartu Keluarga <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="kk" id="kk" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Upload KIA <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="kia" id="kia" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                       
                          <label for="exampleInputUsername1">Upload Akta Kelahiran <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="akta" id="akta" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                       
                        <input type="checkbox" class="form-check-input" id="validate" name="validate" >
                        <label for="exampleInputUsername1"> <span class="mdi mdi-asterisk"> Data yang diregistrasi sudah benar</span></label>

                        </div>
                      </div>
                    </div>
                    <button type="submit" id="submit" name="Submit" class="btn btn-primary me-2" disabled>Submit</button>
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
