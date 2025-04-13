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

    <!-- Library webcam dengan marker javascript-->  
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >    
    <link rel="stylesheet" href="style/face-detection.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src='js/face-api.min.js'></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
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
                <main>
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-12 col-md-4 col-xl-3 align-top">
                            <div class="row mb-3">
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch ">
                                        <input type="checkbox" id="webcam-switch">
                                        <i></i> Webcam </label>  
                                        <button id="cameraFlip" class="btn d-none"></button>     
                                </div> 
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="detection-switch">
                                        <i></i> Detect Face </label>      
                                </div>   
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="box-switch">
                                        <i></i> Bounding Box </label>      
                                </div>
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="landmarks-switch">
                                        <i></i> Landmarks </label>
                                </div>                   
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-xl-9 align-top" id="webcam-container">
                        <div class="loading d-none">
                                Loading Model
                                <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                </div>
                        </div>
                        
                        <div id="video-container">
                                <video id="webcam" autoplay muted playsinline></video>
                        </div>  
                    </div>
                </div>
            </div>
        </main>   
        <script src="js/face-detection.js"></script>
        <br>
        <br>
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="index.php">Beranda</a>
        </div>   

                <!-- Configure a few settings and attach camera -->
                        
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