<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Webcam 2023 - Beranda</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Library webcam javascript-->  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="d-sm-flex align-items-center justify-content-between mb-1 ">
                        <h1 class="h3 mb-1 text-gray-800">Aplikasi Webcam 2023</h1>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
              <!-- Content Row -->
                
                <div class="col-auto menu2">
                    <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <a class="row no-gutters align-items-center" href="webcam_1.php">
                        <div class="col mr-2">
                        <div class="h6 text-xs font-weight-bold text-dark ">Kembali</div>
                        <div class="h6 font-weight-bold text-gray-800">
                    <?php
                    $img = $_POST['image'];
                    $folderPath = "upload/";
                
                    $image_parts = explode(";base64,", $img);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                
                    $image_base64 = base64_decode($image_parts[1]);
                    $fileName = uniqid() . '.png';
                
                    $file = $folderPath . $fileName;
                    file_put_contents($file, $image_base64);
                
                    print_r($fileName);
                
                ?>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-sharp fa-solid fa-camera fa-2x"></i>
                    </div>
                </a>
            </div>
        </div>
   </div>  
                
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>