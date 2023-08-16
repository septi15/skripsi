<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../src/vendors/feather/feather.css">
  <link rel="stylesheet" href="../src/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../src/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../src/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../src/vendors/simple-line-icons/css/simple-line-icons.css">



  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../src/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../src/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

  <link rel="stylesheet" href="../css/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="../src/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../src/images/al-khairaat.jpg" />
  <link rel="stylesheet" href="../css/prismjs/themes/prism.css">
  
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
        
		header("location:user/index.php?pesan=belum_login");
	}
	?>
</head>