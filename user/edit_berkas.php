<?php 
$id = $_GET['id'];
include '../koneksi.php';
$id_reg = 'kosong';
$query_select = "SELECT * FROM pendaftaran_siswa_baru a join data_orang_tua b on a.id_siswa_baru = b.id_siswa_baru where a.id_siswa_baru = '$id'";
$result = $koneksi->query($query_select);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    
        $id_siswa_baru= $row['id_siswa_baru'];
        $nama_ayah = $row['nama_ayah'];
        $tempat_ayah= $row['tempat_ayah'];
        $tl_ayah= $row['tl_ayah'];
        $pekerjaan_ayah = $row['pekerjaan_ayah'];
        $pendidikan_ayah= $row['pendidikan_ayah'];
        $penghasilan_ayah= $row['penghasilan_ayah'];

        $nama_ibu = $row['nama_ibu'];
        $tempat_ibu= $row['tempat_ibu'];
        $tl_ibu= $row['tl_ibu'];
        $pekerjaan_ibu = $row['pekerjaan_ibu'];
        $pendidikan_ibu= $row['pendidikan_ibu'];
        $penghasilan_ibu= $row['penghasilan_ibu'];

        $nik_calon_siswa= $row['nik_calon_siswa'];
        $nama_lengkap= $row['nama_lengkap'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $tempat= $row['tempat'];
        $tanggal_lahir= $row['tanggal_lahir'];
        $alamat_lengkap= $row['alamat_lengkap'];
        $no_handphone= $row['no_handphone'];
        $email= $row['email'];
        $kartu_keluarga= $row['kartu_keluarga'];
        $kia= $row['kia'];
        $akta_kelahiran= $row['akta_kelahiran'];
        }
}
        
include 'header.php';?>
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
                  <form class="forms-sample" action="form_action_edit_berkas.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="formpendaftaran">
                  <div class="form-group">
                    <div class="row">
                      
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Nama </label>
                          <input type="text" class="form-control" id="namaayah" name="namaayah" value="<?php echo $nama_ayah;?>" placeholder="Nama" size="15">
                          <input type="hidden" class="form-control" id="id_siswa_baru" name="id_siswa_baru" value="<?php echo $id_siswa_baru;?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatayah" name="tempatayah" value="<?php echo $tempat_ayah;?>" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlayah" name="tlayah" value="<?php echo $tl_ayah;?>" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaanayah"name="pekerjaanayah" value="<?php echo $pekerjaan_ayah;?>" placeholder="Pekerjaan">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Pendidikan </label>
                          <select id="pendidikanayah " name="pendidikanayah " class="form-control">
                              <option value="">Pilih Pendidikan Terakhir Ayah</option>
                              <option <?=($pendidikan_ayah=='sd')?'selected="selected"':''?>value="sd">SD</option>
                              <option <?=($pendidikan_ayah=='smp')?'selected="selected"':''?>value="smp">SMP</option>
                              <option <?=($pendidikan_ayah=='sma')?'selected="selected"':''?>value="sma">SMA</option>
                              <option <?=($pendidikan_ayah=='diploma')?'selected="selected"':''?>value="diploma">Diploma</option>
                              <option <?=($pendidikan_ayah=='sarjana')?'selected="selected"':''?>value="sarjana">Sarjana</option>
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
                              <option <?=($penghasilan_ayah=='0jt - 2.5jt')?'selected="selected"':''?>value="0jt - 2.5jt">0jt - 2.5jt</option>
                              <option <?=($penghasilan_ayah=='2.5jt - 5jt')?'selected="selected"':''?>value="2.5jt - 5jt">2.5jt - 5jt</option>
                              <option <?=($penghasilan_ayah=='5jt - 10jt')?'selected="selected"':''?>value="5jt - 10jt">5jt - 10jt</option>
                              <option <?=($penghasilan_ayah=='10jt - 20jt')?'selected="selected"':''?>value="10jt - 20jt">10jt - 20jt</option>
                              <option <?=($penghasilan_ayah=='20jt keatas')?'selected="selected"':''?>value="20jt keatas">20jt keatas</option>
                          </select>                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                          <label for="exampleInputUsername1"> No Handphone</label>
                          <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $_SESSION['nohp'];?>">
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
                          <input type="text" class="form-control" id="namaibu" name="namaibu" value="<?php echo $nama_ibu;?>"placeholder="Nama" size="15">
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatibu" name="tempatibu" value="<?php echo $tempat_ibu;?>" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlibu" name="tlibu" value="<?php echo $tl_ibu;?>" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" value="<?php echo $pekerjaan_ibu;?>" placeholder="Pekerjaan">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Pendidikan Ibu</label>
                          <select id="pendidikanibu" name="pendidikanibu" class="form-control">
                              <option value="">Pilih Pendidikan Terakhir Ibu</option>
                              <option <?=($pendidikan_ibu=='sd')?'selected="selected"':''?>value="sd">SD</option>
                              <option <?=($pendidikan_ibu=='smp')?'selected="selected"':''?>value="smp">SMP</option>
                              <option <?=($pendidikan_ibu=='sma')?'selected="selected"':''?>value="sma">SMA</option>
                              <option <?=($pendidikan_ibu=='diploma')?'selected="selected"':''?>value="diploma">Diploma</option>
                              <option <?=($pendidikan_ibu=='sarjana')?'selected="selected"':''?>value="sarjana">Sarjana</option>
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
                              <option <?=($penghasilan_ibu=='0jt - 2.5jt')?'selected="selected"':''?>value="0jt - 2.5jt">0jt - 2.5jt</option>
                              <option <?=($penghasilan_ibu=='2.5jt - 5jt')?'selected="selected"':''?>value="2.5jt - 5jt">2.5jt - 5jt</option>
                              <option <?=($penghasilan_ibu=='5jt - 10jt')?'selected="selected"':''?>value="5jt - 10jt">5jt - 10jt</option>
                              <option <?=($penghasilan_ibu=='10jt - 20jt')?'selected="selected"':''?>value="10jt - 20jt">10jt - 20jt</option>
                              <option <?=($penghasilan_ibu=='20jt keatas')?'selected="selected"':''?>value="20jt keatas">20jt keatas</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-4">
                          <label for="exampleInputUsername1"> Email</label>
                          <input type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>">
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
                          <input type="text" class="form-control" id="nikcamur" name="nikcamur" value="<?php echo $nik_calon_siswa;?>" placeholder="Nama Lengkap">
                        </div>
                    </div>
                        </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputUsername1"> Nama Lengkap (Calon Murid Sesuai Akta) <span class="mdi mdi-asterisk"></span></label>
                            <input type="text" class="form-control" id="namalengkapcamur"name="namalengkapcamur" value="<?php echo $nama_lengkap;?>" placeholder="Nama Lengkap">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label  for="form-check-label"> Jenis Kelamin </label>
                      <div class="row">
                        <div class="col-md-2">
                          <input type="checkbox" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="lakilaki" <?php if($jenis_kelamin=="lakilaki"){ echo "checked";}?>>
                          <label for="form-check-label1"> Laki-Laki</label>
                        </div>
                        <div class="col-md-2">
                          <input type="checkbox" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="perempuan" <?php if($jenis_kelamin=="perempuan"){ echo "checked";}?>>
                          <label for="form-check-label2"> Perempuan</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $tempat;?>" placeholder="Tempat">
                            </div>  
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tl" name="tl" value="<?php echo $tanggal_lahir;?>" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Alamat Lengkap </label>
                      <div class="row">
                        <div class="col-md-6">
                              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat_lengkap;?>" placeholder="Alamat">
                              
                            </div>  
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Upload Kartu Keluarga <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="kk" id="kk" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Cek Berkas <span class="mdi mdi-asterisk"></span></label>
                          <a class='btn btn-success me-2'  href="../upload_berkas/<?php echo rawurlencode($kartu_keluarga);?> "> Lihat berkas </a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Upload KIA <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="kia" id="kia" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Cek Berkas <span class="mdi mdi-asterisk"></span></label>
                          <a class='btn btn-success me-2' href="../upload_berkas/<?php echo rawurlencode($kia);?> "> Lihat berkas</a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputUsername1">Upload Akta Kelahiran <span class="mdi mdi-asterisk"></span></label>
                          <input type="file" name="akta" id="akta" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputUsername1"> Cek Berkas <span class="mdi mdi-asterisk"></span></label>
                          <a class='btn btn-success me-2'  href="../upload_berkas/<?php echo rawurlencode($akta_kelahiran);?> "> Lihat Berkas </a>
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
        <?php  include 'footer.php';?>
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
