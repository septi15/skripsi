<?php 
include 'header.php';
include 'sidebar.php';
include '../koneksi.php';
$query_calon_siswa = "select count(*) as total from pendaftaran_siswa_baru";
$query_admin = "select count(*) as total from admin_login";
$result_admin = $koneksi->query($query_admin);
$result_siswa = $koneksi->query($query_calon_siswa);

$query_test = "select count(*) as total from hasil_test";
$query_pembayaran = "select count(*) as total from pembayaran";
$result_test = $koneksi->query($query_test);
$result_pembayaran = $koneksi->query($query_pembayaran);

if ($result_admin) {
  $row = $result_admin->fetch_assoc();
  $total_admin = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

if ($result_siswa) {
  $row = $result_siswa->fetch_assoc();
  $total_siswa = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

if ($result_test) {
  $row = $result_test->fetch_assoc();
  $total_test = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

if ($result_pembayaran) {
  $row = $result_pembayaran->fetch_assoc();
  $total_pembayaran = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

$query_total= "select count(*) as total from status_review where status='lengkap'";
$result_total = $koneksi->query($query_total);
if ($result_total) {
  $row = $result_total->fetch_assoc();
  $total_lengkap = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

$query_total_belum= "select count(*) as total from status_review where status='belum_lengkap'";
$result_total_belum = $koneksi->query($query_total_belum);
if ($result_total_belum) {
  $row = $result_total_belum->fetch_assoc();
  $total_belum = $row['total'];
} else {
  echo "Error: " . $conn->error;
}

$date= array();
$jumlah_date = array();
$query_total_date= "SELECT date(date_time) AS date_time, COUNT(*) AS jumlah_date FROM pendaftaran_siswa_baru GROUP BY date(date_time)";
$result_total_date = $koneksi->query($query_total_date);
if ($result_total_date->num_rows > 0)
  {
  while ($row=$result_total_date->fetch_assoc()) { 
   $date[]=$row['date_time'];
   $jumlah_date[]=$row['jumlah_date'];
  }
}

?>
<div class="main-panel">     
  <div class="content-wrapper">      
    <div class="row">
      <div class="col-lg-3 grid-margin stretch-card">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
          </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_admin;?>
                  </div>
                </div>
        </div>
      </div>

      <div class="col-lg-3 grid-margin stretch-card">
        <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Calon Siswa</h4>
                  </div>
                  <div class="card-body">
                   <?php echo $total_siswa;?>
                  </div>
                </div>
        </div>
      </div>
     
      <div class="col-lg-3 grid-margin stretch-card">
        <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Proses Test</h4>
                  </div>
                  <div class="card-body">
                   <?php echo $total_test;?>
                  </div>
                </div>
        </div>
      </div>
      <div class="col-lg-3 grid-margin stretch-card">
        <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Proses Pembayaran</h4>
                  </div>
                  <div class="card-body">
                   <?php echo $total_pembayaran;?>
                  </div>
                </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data status review berkas <a style="padding-left: 380px;" class="mdi mdi-printer" href="report_pendaftaran.php?total_test=<?php echo $total_test;?>&total_bayar=<?php echo $total_pembayaran;?>&total_siswa=<?php echo $total_siswa;?>"></a></h4>
                  <canvas id="pieCharts"></canvas>
                </div>
            </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pendaftaran berdasarkan tanggal <a style="padding-left: 580px;" class="mdi mdi-printer" href="report_pendaftaran.php?total_test=<?php echo $total_test;?>&total_bayar=<?php echo $total_pembayaran;?>&total_siswa=<?php echo $total_siswa;?>"></a></h4>
                  <canvas id="barCharts"></canvas>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>


  <!-- container-scroller -->
  <script>
    var total_lengkap= <?php echo json_encode($total_lengkap); ?>;
    var total_belum= <?php echo json_encode($total_belum); ?>;
    var jumlah_date = <?php echo json_encode($jumlah_date);?>;
    var date = <?php echo json_encode($date);?>;
    $(function() {
      'use strict';
      var doughnutPieData = {
    datasets: [{
      data: [total_lengkap,total_belum],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Berkas Lengkap',
      'Berkas Belum Lengkap',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var data = {
    labels: date,
    datasets: [{
      label: 'Jumlah siswa',
      data: jumlah_date,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };

      if ($("#pieCharts").length) {
    var pieChartCanvas = $("#pieCharts").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#barCharts").length) {
    var barChartCanvas = $("#barCharts").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
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
  <script src="../src/js/chart.js"></script>
  <script src="../src/js/select2.js"></script>
  <!-- End custom js for this page-->
  <script src="../js/index-0.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../js/custom.js"></script>
</body>

</html>
        <!-- content-wrapper ends -->
