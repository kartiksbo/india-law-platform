<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SC Judges</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            //Include Sidebar
            include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                        <div class="dropdown mb-6">
                            <button class="btn btn-light dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Supreme Court
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Supreme Court</a>
                                            <a class="dropdown-item" href="judges_hc.php">High Court</a>
                            </div>
                        </div>
                    </div>


                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                    <div class="container">
                            
                        <div class="my-4"></div>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Justices of the Supreme Court of India (1950-2019)</h1>
                    <p class="mb-4">This dataset contains information on the Former and Current Justices of the Indian Supreme Court, with Open Data Commons Attribution License by Gyan Prakash Tripathi.

                    The data has been sourced primarily from the official website of the Supreme Court of India, and the book 'Judges of the Supreme Court of India 1950-1989' by George H. Gadbois, Jr. The dataset contains the educational background, their appointments to various high courts, government positions held, area of practice, etc.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Judges with their educational background, appointments to various High Courts, Government-positions held, area(s) of practice, etc</h6>
                        </div>
                        <div class="card-body">

                             <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name of Judge</th><th>Date of appointment to SC</th><th>Date of retirement from SC</th><th>Date of Birth</th><th>State of Birth</th><th>Gender</th><th>Caste</th><th>Academia</th><th>Direct appointee to SC?</th><th>If no, parent HC</th><th>Whether a trial court judge</th><th>Whether a government lawyer</th><th>If yes, what type</th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>Name of Judge</th><th>Date of appointment to SC</th><th>Date of retirement from SC</th><th>Date of Birth</th><th>State of Birth</th><th>Gender</th><th>Caste</th><th>Academia</th><th>Direct appointee to SC?</th><th>If no, parent HC</th><th>Whether a trial court judge</th><th>Whether a government lawyer</th><th>If yes, what type</th></th>
                                        </tr>
                                    </tfoot>


                                    <tbody>
                                        
                                        <?php 
                                        //Include database connection
                                        include 'dbconfig.php';

                                        $fetch_sql="select * from judges_sc";
                                        $result_fetch=$conn->query($fetch_sql);

                                        while($row = mysqli_fetch_array($result_fetch)){
                                            $name_j = $row['name_j'];
                                            $doa_sc = $row['doa_sc'];
                                            $dor_sc = $row['dor_sc'];
                                            $cji_sc = $row['cji_sc'];
                                            $doa_cji_sc = $row['doa_cji_sc'];
                                            $dob = $row['dob'];
                                            $state = $row['state'];
                                            $gender = $row['gender'];
                                            $religion = $row['religion'];
                                            $caste = $row['caste'];
                                            $highest_degree = $row['highest_degree'];
                                            $bar_enrollment = $row['bar_enrollment'];
                                            $state_bar = $row['state_bar'];
                                            $senior = $row['senior'];
                                            $year_senior = $row['year_senior'];
                                            $direct_appointee = $row['direct_appointee'];
                                            $parent_hc = $row['parent_hc'];
                                            $nature_app = $row['nature_app'];
                                            $doa_parent_hc_addln = $row['doa_parent_hc_addln'];
                                            $perm_parent_hc = $row['perm_parent_hc'];
                                            $doa_parent_hc_perm = $row['doa_parent_hc_perm'];
                                            $other_hc_app = $row['other_hc_app'];
                                            $other_hc_app_1 = $row['other_hc_app_1'];
                                            $other_hc_app_2 = $row['other_hc_app_2'];
                                            $doa_hc_app_2 = $row['doa_hc_app_2'];
                                            $cj_hc = $row['cj_hc'];
                                            $cj_hc_count = $row['cj_hc_count'];
                                            $doa_first_cj = $row['doa_first_cj'];
                                            $hc_first_cj = $row['hc_first_cj'];
                                            $doa_second_cj = $row['doa_second_cj'];
                                            $hc_second_cj = $row['hc_second_cj'];
                                            $doa_third_cj = $row['doa_third_cj'];
                                            $hc_third_cj = $row['hc_third_cj'];
                                            $trial_judge = $row['trial_judge'];
                                            $govt_lawyer = $row['govt_lawyer'];
                                            $govt_lawyer_type = $row['govt_lawyer_type'];
                                            $aop_1 = $row['aop_1'];
                                            $aop_2 = $row['aop_2'];
                                            $aop_3 = $row['aop_3'];
                                            $aop_4 = $row['aop_4'];
                                            $aop_5 = $row['aop_5'];
                                            $aop_6 = $row['aop_6'];
                                            $aop_7 = $row['aop_7'];
                                            $aop_8 = $row['aop_8'];
                                            $aop_9 = $row['aop_9'];

                                            if($gender=='0')
                                                $g='Male';
                                            elseif($gender=='1') $g='Female';

                                            if($direct_appointee=='0')
                                                $d_a='No';
                                            elseif($direct_appointee=='1') $d_a='Yes';

                                            if($trial_judge=='0')
                                                $t_j='No';
                                            elseif($trial_judge=='1') $t_j='Yes';

                                            if($govt_lawyer=='0')
                                                $g_l='No';
                                            elseif($govt_lawyer=='1') $g_l='Yes';
                                                    
                                            echo "<tr><td>".$name_j."</td><td>".$doa_sc."</td><td>".$dor_sc."</td><td>".$dob."</td><td>".$state."</td><td>".$g."</td><td>".$caste."</td><td>".$highest_degree."</td><td>".$d_a."</td><td>".$parent_hc."</td><td>".$t_j."</td><td>".$g_l."</td><td>".$govt_lawyer_type."</td>";
                                                }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>