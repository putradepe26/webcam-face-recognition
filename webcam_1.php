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
                <div class="container">
                    <form method="POST" action="simpan_gambar.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="my_camera"></div>
                            <br/>
                                <input class="btn btn-primary" type=button value="Take Snapshot" onClick="take_snapshot()">
                                <!--<button class="btn btn-primary" onClick="take_snapshot()" >Take Snapshot </button>-->
                                <input type="hidden" name="image" class="image-tag">
                            </div>
                                <div class="col-md-6">
                                    <div id="results">Hasil Tangkapan layar Webcam</div>
                                </div>
                                <div class="col-md-12 text-center">
                            <br/>
                                <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="col-md-12 text-center">
                    <a class="btn btn-primary" href="index.php">Beranda</a>
                    </div>
                
        <!-- Configure a few settings and attach camera -->
            <script language="JavaScript">
                Webcam.set({
                    width: 500,
                    height: 390,
                    image_format: 'jpeg',
                    jpeg_quality: 93
                });
                     Webcam.attach( '#my_camera' );
            function take_snapshot() {
            Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
             } );
            }
            </script>
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