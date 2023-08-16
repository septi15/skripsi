<?php 
include '../koneksi.php';
$id = $_GET['id'];
$test = $_GET['test'];
$nilai = $_GET['nilai'];
$query_select = "SELECT * FROM hasil_test  where id_siswa_baru ='$id' ";
$result_test = $koneksi->query($query_select);
if ($test == 'pertama'){
  $test_ulang = false;
  
}else {
  $test_ulang = true;
}
include 'header.php';?>
<?php include 'sidebar.php';?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php if ($test_ulang){?>
                    <h2 class="card-title">Silahkan jawab dengan Jujur</h2>
                    <h2 class="card-title">Nilai Sebelumnya <?php echo $nilai;?> </h2>
                  <?php }
                  else{ ?>
                    <h2 class="card-title">Silahkan jawab dengan Jujur</h2>
                  <?php }?>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action_test.php" method="post" onsubmit="return validateForm()" name="formtest">
                  <div class="form-group">
                      <label  for="form-check-label">1. Lanjutkan abdjad berikut A B C D E </label>
                      <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" class="form-control" id="id_siswa_baru" name="id_siswa_baru" value="<?php echo $id;?>" readonly>
                        <input type="hidden" class="form-control" id="test_ulang" name="test_ulang" value="<?php echo $test_ulang;?>" readonly>
                          <input type="radio" class="form-check-input" id="nomor1" name="nomor1" value="a"> <label for="form-check-label1">A. K L M N O</label><br>
                          <input type="radio" class="form-check-input" id="nomor1" name="nomor1" value="b"> <label for="form-check-label2">B. F G H I J</label><br>
                          <input type="radio" class="form-check-input" id="nomor1" name="nomor1" value="c"> <label for="form-check-label1">C. P Q R S T</label><br>
                          <input type="radio" class="form-check-input" id="nomor1" name="nomor1" value="d"> <label for="form-check-label2">D. a b c d e</label>
                        </div>
                      </div>
                      <label  for="form-check-label">2. Lanjutkan angka berikut 1 2 3 4 5 </label>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="radio" class="form-check-input" id="nomor2" name="nomor2" value="a"> <label for="form-check-label1">A. 6 7 8 9 10</label><br>
                          <input type="radio" class="form-check-input" id="nomor2" name="nomor2" value="b"> <label for="form-check-label2">B. 11 12 13 14 15</label><br>
                          <input type="radio" class="form-check-input" id="nomor2" name="nomor2" value="c"> <label for="form-check-label1">C. 5 4 3 2 1</label><br>
                          <input type="radio" class="form-check-input" id="nomor2" name="nomor2" value="d"> <label for="form-check-label2">D. 9 8 7 6 5</label>
                        </div>
                      </div>
                      <label  for="form-check-label">3. Hasil dari 1 + 3 = ... </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor3" name="nomor3" value="a"> <label for="form-check-label1"> 9 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor3" name="nomor3" value="b"> <label for="form-check-label2"> 13 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor3" name="nomor3" value="c"> <label for="form-check-label1"> 2 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor3" name="nomor3" value="d"> <label for="form-check-label2"> 4 </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">4. Bentuk apakah gambar dibawah ini ?</label> <br>
                      <img src="../img/kotak.png">
                      <div class="row">
                        <div class="col-md-4">
                          <input type="radio" class="form-check-input" id="nomor4" name="nomor4" value="a"> <label for="form-check-label1"> Persegi </label> <br>                       
                          <input type="radio" class="form-check-input" id="nomor4" name="nomor4" value="b"> <label for="form-check-label2"> Persegi Panjang </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor4" name="nomor4" value="c"> <label for="form-check-label1"> Lingkaran </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor4" name="nomor4" value="d"> <label for="form-check-label2"> Segi Enam </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">5. Gambar hewan apakah ini ?</label><br>
                      <img src="../img/jerapah.jfif">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor5" name="nomor5" value="a"> <label for="form-check-label1"> Anoa </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor5" name="nomor5" value="b"> <label for="form-check-label2"> Gajah </label> <br>                        
                          <input type="radio" class="form-check-input" id="nomor5" name="nomor5" value="c"> <label for="form-check-label1"> Jerapah </label> <br>                        
                          <input type="radio" class="form-check-input" id="nomor5" name="nomor5" value="d"> <label for="form-check-label2"> Singa </label>
                        </div>
                      </div>
                      <label  for="form-check-label">6. Berapa jumlah huruf dari kata M A K A N ? </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor6" name="nomor6" value="a"> <label for="form-check-label1"> 2 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor6" name="nomor6" value="b"> <label for="form-check-label2"> 5 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor6" name="nomor6" value="c"> <label for="form-check-label1"> 6 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor6" name="nomor6" value="d"> <label for="form-check-label2"> 4 </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">7. Hasil dari 4 - 3 = ... </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor7" name="nomor7" value="a"> <label for="form-check-label1"> 1 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor7" name="nomor7" value="b"> <label for="form-check-label2"> 7 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor7" name="nomor7" value="c"> <label for="form-check-label1"> 2 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor7" name="nomor7" value="d"> <label for="form-check-label2"> 6 </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">8. Warna apakah gambar berikut ? </label><br>
                      <img src="../img/hijau.jpg">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor8" name="nomor8" value="a"> <label for="form-check-label1"> Kuning </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor8" name="nomor8" value="b"> <label for="form-check-label2"> Merah </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor8" name="nomor8" value="c"> <label for="form-check-label1"> Biru </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor8" name="nomor8" value="d"> <label for="form-check-label2"> Hijau </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">9. Apa nama huruf hijaiyah dalam gambar berikut ? </label>
                      <img src="../img/nun.png">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor9" name="nomor9" value="a"> <label for="form-check-label1"> tsa </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor9" name="nomor9" value="b"> <label for="form-check-label2"> ba </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor9" name="nomor9" value="c"> <label for="form-check-label1"> nun </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor9" name="nomor9" value="d"> <label for="form-check-label2"> qaf </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">10. Sapi adalah hewan berkaki ...   </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor10" name="nomor10" value="a"> <label for="form-check-label1"> tiga </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor10" name="nomor10" value="b"> <label for="form-check-label2"> empat </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor10" name="nomor10" value="c"> <label for="form-check-label1"> enam </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor10" name="nomor10" value="d"> <label for="form-check-label2"> lima </label>
                          
                        </div>
                      </div>
                </div>
              </div>
              </div>
          </div>
          

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <br>
                 <br>
                  <p class="card-description">
                  </p>
                  <div class="form-group">
                      <label  for="form-check-label">11. Bentuk apakah gambar dibawah ini ? </label> <br>
                      <img src="../img/segitiga.png">
                      <div class="row">
                        <div class="col-md-5">
                          <input type="radio" class="form-check-input" id="nomor11" name="nomor11" value="a"> <label for="form-check-label1">A. Segi tiga</label><br>
                          <input type="radio" class="form-check-input" id="nomor11" name="nomor11" value="b"> <label for="form-check-label2">B. Segi enam</label><br>
                          <input type="radio" class="form-check-input" id="nomor11" name="nomor11" value="c"> <label for="form-check-label1">C. Segi lima</label><br>
                          <input type="radio" class="form-check-input" id="nomor11" name="nomor11" value="d"> <label for="form-check-label2">D. Segi empat</label>
                        </div>
                      </div>
                      <label  for="form-check-label">12. Urutkan angka berikut dari yang paling kecil 7 4 5 8 6 </label>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="radio" class="form-check-input" id="nomor12" name="nomor12" value="a"> <label for="form-check-label1">A. 5 4 7 8 6</label><br>
                          <input type="radio" class="form-check-input" id="nomor12" name="nomor12" value="b"> <label for="form-check-label2">B. 6 7 8 4 5</label><br>
                          <input type="radio" class="form-check-input" id="nomor12" name="nomor12" value="c"> <label for="form-check-label1">C. 8 7 6 5 4</label><br>
                          <input type="radio" class="form-check-input" id="nomor12" name="nomor12" value="d"> <label for="form-check-label2">D. 4 5 6 7 8</label>
                        </div>
                      </div>
                      <label  for="form-check-label">13. Anggota tubuh yang digunakan untuk mendengar adalah ? </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor13" name="nomor13" value="a"> <label for="form-check-label1"> Telinga </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor13" name="nomor13" value="b"> <label for="form-check-label2"> Hidung </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor13" name="nomor13" value="c"> <label for="form-check-label1"> Mata </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor13" name="nomor13" value="d"> <label for="form-check-label2"> Mulut </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">14. Jumlah Malaikat yang harus kita imani ada ? </label> <br>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="radio" class="form-check-input" id="nomor14" name="nomor14" value="a"> <label for="form-check-label1"> 12 </label> <br>                       
                          <input type="radio" class="form-check-input" id="nomor14" name="nomor14" value="b"> <label for="form-check-label2"> 15 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor14" name="nomor14" value="c"> <label for="form-check-label1"> 8 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor14" name="nomor14" value="d"> <label for="form-check-label2"> 10 </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">15. Apa nama huruf hijaiyah dalam gambar berikut ?</label><br>
                      <img src="../img/tsa.png">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor15" name="nomor15" value="a"> <label for="form-check-label1"> nun </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor15" name="nomor15" value="b"> <label for="form-check-label2"> tsa </label> <br>                        
                          <input type="radio" class="form-check-input" id="nomor15" name="nomor15" value="c"> <label for="form-check-label1"> ba </label> <br>                        
                          <input type="radio" class="form-check-input" id="nomor15" name="nomor15" value="d"> <label for="form-check-label2"> syin </label>
                        </div>
                      </div>
                      <label  for="form-check-label">16. Warna apakah gambar berikut ? </label> <br>
                      <img src="../img/merah.jpg">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor16" name="nomor16" value="a"> <label for="form-check-label1"> biru </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor16" name="nomor16" value="b"> <label for="form-check-label2"> hijau </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor16" name="nomor16" value="c"> <label for="form-check-label1"> kuning </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor16" name="nomor16" value="d"> <label for="form-check-label2"> merah </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">17. Nama Malaikat pemberi rizki adalah ? </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor17" name="nomor17" value="a"> <label for="form-check-label1"> Jibril </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor17" name="nomor17" value="b"> <label for="form-check-label2"> Mikai </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor17" name="nomor17" value="c"> <label for="form-check-label1"> Israfil </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor17" name="nomor17" value="d"> <label for="form-check-label2"> Izrail </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">18. Sebutkan warna bendera Indonesia  </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor18" name="nomor18" value="a"> <label for="form-check-label1"> Merah Putih </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor18" name="nomor18" value="b"> <label for="form-check-label2"> Putih Merah </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor18" name="nomor18" value="c"> <label for="form-check-label1"> Merah Merah </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor18" name="nomor18" value="d"> <label for="form-check-label2"> Putih Putih </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">19. Berapa jumlah shalat wajib dalam sehari ? </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor19" name="nomor19" value="a"> <label for="form-check-label1"> 5 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor19" name="nomor19" value="b"> <label for="form-check-label2"> 6 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor19" name="nomor19" value="c"> <label for="form-check-label1"> 7 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor19" name="nomor19" value="d"> <label for="form-check-label2"> 8 </label>
                          
                        </div>
                      </div>
                      <label  for="form-check-label">20. Rukun Iman ada ? </label>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="radio" class="form-check-input" id="nomor20" name="nomor20" value="a"> <label for="form-check-label1"> 5 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor20" name="nomor20" value="b"> <label for="form-check-label2"> 6 </label> <br>                         
                          <input type="radio" class="form-check-input" id="nomor20" name="nomor20" value="c"> <label for="form-check-label1"> 7 </label> <br>                          
                          <input type="radio" class="form-check-input" id="nomor20" name="nomor20" value="d"> <label for="form-check-label2"> 8 </label>
                          
                        </div>
                      </div>
                    <button type="submit" name="Submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
  const groups = ['nomor1', 'nomor2','nomor3','nomor4','nomor5','nomor6', 'nomor7','nomor8','nomor9','nomor10','nomor11', 'nomor12','nomor13','nomor14','nomor15','nomor16', 'nomor17','nomor18','nomor19','nomor20'];

  for (let i = 0; i < groups.length; i++) {
    const radioButtons = document.getElementsByName(groups[i]);
    let isChecked = false;

    for (let j = 0; j < radioButtons.length; j++) {
      if (radioButtons[j].checked) {
        isChecked = true;
        break;
      }
    }

    if (!isChecked) {
      alert(`Silahkan pilih jawaban ${groups[i]}`);
      return false;
    }
    else {
      const isConfirmed = confirm("Anda yakin menyelesaikan test ini? Nilai Akan muncul dimenu test");
      return isConfirmed;
    }
  }

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
