<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-home me-2"></i>Fasilitas</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item active">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">

            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NAMA FASILITAS</label>
                                    <input type="text" class="form-control" id="name_fasilitas" name="name_fasilitas">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                                    <textarea class="form-control" id="lokasi" name="lokasi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="lat" name="lat" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="lng" name="lng" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                    <textarea class="form-control" id="ket" name="ket"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Longitude</label>
                                    <input type="file" class="form-control" id="file" name="file" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Maps</h6>
                            <div id="map" style="height:100%;"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Form End -->
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Facility of Pelindo</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/chart/chart.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAL3wnR5RPZiMKWjzoitiujIowGzdzzvU&callback=initMap">
    </script>
    <script>
        let map;
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
            keyboard: false
        })


        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -3.9094728424575864,
                    lng: 102.29057241089914
                },
                mapTypeId: google.maps.MapTypeId.HYBRID,
                zoom: 15,
            });
            map.addListener("click", (e) => {
                alert(e.latLng)
            });
        }



        window.initMap = initMap;
    </script>
</body>

</html>