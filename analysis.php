<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analysis - India Law Platform</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kartik Saboo</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Analyze</h1>
                    <p class="mb-4">Here, we aim to enable researchers, academicians, lawyers, etc to study the causal impacts of legal rulings.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Grow In Utility -->
                        <div class="col-lg-6">

                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Study the impact of (predictor)</h6>
                                </div>
                                <div class="card-body">
                                    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                                        <a class="navbar-brand" href="#">Select X</a>
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="XDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Predictor
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right animated--grow-in"
                                                    aria-labelledby="XDropdown">
                                                    <!--<a class="dropdown-item" href="#">Environment Cases Rulings</a>
                                                    <a class="dropdown-item" href="#">Criminal Cases Rulings</a>-->
                                                    <a class="dropdown-item">Water Pollution Case Rulings</a>
                                                    <a class="dropdown-item">Air Pollution Case Rulings</a>
                                                    <a class="dropdown-item">Land Records Case Rulings</a>
                                                    <!--<div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Judges' Characteristics</a>-->
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!--<div class="dropdown mb-4">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Environment</a>
                                            <a class="dropdown-item" href="#">Criminal</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>-->

                                    <p class="mb-0 small">Select the predictor that you wish to evaluate against an outcome</p>
                                </div>
                            </div>

                        </div>

                        <!-- Fade In Utility -->
                        <div class="col-lg-6">

                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">on / against (outcome)</h6>
                                </div>
                                <div class="card-body">
                                    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                                        <a class="navbar-brand" href="#">Select Y</a>
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Outcome
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right animated--fade-in"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item">Water Biological Oxygen Demand (BOD)</a>
                                                    <a class="dropdown-item">Air Quality Index</a>
                                                    <a class="dropdown-item">Gross Domestic Product (GDP) per capita</a>

                                                    <!--<div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Other</a>-->
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                    
                                    <p class="mb-0 small">Select the outcome against / on which you wish to evaluate the predictor ('X')</p>
                                </div>
                            </div>

                        </div>


                    </div>

                     <!--<br /><p class="mb-4">View the analysis broken down by:</p>
                     <ul>
                         
                         <b><u>Fraction of Pro-Environment Green Cases:</u></b> One percent point increase in the fraction of green cases decreases Water Biological Oxygen Demand by 3.329 units.
                         <br /><br />
                         <b><u>Government is a repondent:</u></b> One percent point increase in probability of government being a respondent increases Water Biological Oxygen Demand by 1.729 units.
                         <br /><br />
                         <b><u>Appeal:</u></b> One percent point increase in probability of the case being an appeal increases Water Biological Oxygen Demand by 4.925 units
                         <br /><br />
                         <b><u>Constitutional:</u></b> One percent point increase in probability of the case being an appeal decreases Water Biological Oxygen Demand by 5.183 units.
                    </ul>-->




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; India Law Platform 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>