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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="sidebar-brand-text mx-3">India Law Platform</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="about.html">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>About</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Discover
            </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="cases.php">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Search Cases Closest to</span>
                </a>
                <!--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">By Domain:</h6>
                        <a class="collapse-item" href="cases.php">All</a>
                        <a class="collapse-item" href="cases.php">Criminal</a>
                        <a class="collapse-item" href="cases.php">Environment</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">By Court:</h6>
                        <a class="collapse-item" href="cases.php">All</a>
                        <a class="collapse-item" href="#">Supreme Court</a>
                        <a class="collapse-item" href="#">High Courts</a>
                        <a class="collapse-item" href="#">District Courts</a>
                        <a class="collapse-item" href="#">Lower Courts</a>
                        <h6 class="collapse-header">By Type:</h6>
                        <a class="collapse-item" href="cases.php">All</a>
                        <a class="collapse-item" href="#">Writ Petition</a>
                        <a class="collapse-item" href="#">Appeals</a>
                    </div>
                </div>-->
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="judges_sc.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Judges</span>
                </a>
                <!--<div id="collapseThree" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Of court:</h6>
                        <a class="collapse-item" href="judges_sc.php">Supreme Court (1950-2019)</a>
                    </div>
                </div>-->
            </li>

            <!-- Divider -->
            <!--<hr class="sidebar-divider">-->

            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Insights
            </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="analysis.php">
                    <i class="fas fa-fw fa-crosshairs"></i>
                    <span>Analyze</span>
                </a>
                
            </li>

            <!-- Nav Item - Charts -->
            <!--<li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Statistics & Trends</span></a>
            </li>-->

            <!-- Nav Item - Tables -->
            <!--<li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Extra</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!--<div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">March 12, 2021</div>
                                        <span class="font-weight-bold">A new dataset has been added!</span>
                                    </div>
                                </a>
                                <!--<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>-->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">2</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the data that you waned last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <!--<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>-->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

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
                                            <th>Name of Judge</th><th>Date of appointment to SC</th><th>Date of retirement from SC</th><th>Whether CJI of SC</th><th>If yes, date of appointment as CJI</th><th>Date of Birth</th><th>State of Birth</th><th>Gender</th><th>Religion</th><th>Caste (Savarna/OBC/SC/ST)</th><th>Highest Degree Obtained</th><th>Year of Enrollment to Bar</th><th>Which State Bar was he enrolled in</th><th>Was Senior Advocate?</th><th>If Yes, Year of appointment as Senior Advocate</th><th>Whether direct appointee to SC?</th><th>If no, parent HC</th><th>Nature of Appointment to parent HC</th><th>Date of appointment to such parent HC addln.</th><th>Whether made permanent at parent HC?</th><th>Date of appointment to such parent HC permanently</th><th>Appointment in any other HC as a judge?</th><th>Name of Such other 1</th><th>Name of Such other 2</th><th>Date of appointment to such 2</th><th>Whether CJ of a ?</th><th>If Y, how many?</th><th>Date of first appointment as CJ</th><th>Name of the HC where first appointed as CJ</th><th>Date of Second Appointment as CJ</th><th>Name of the HC where second appointed as CJ</th><th>Date of Third Appointment as CJ</th><th>Name of the HC where third appointed as CJ</th><th>Whether a trial court judge</th><th>Whether a government lawyer</th><th>If yes, what type</th><th>Area of Practice 1</th><th>Area of Practice 2</th><th>Area of Practice 3</th><th>Area of Practice 4</th><th>Area of Practice 5</th><th>Area of Practice 6</th><th>Area of Practice 7</th><th>Area of Practice 8</th><th>Area of Practice 9</th>
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>Name of Judge</th><th>Date of appointment to SC</th><th>Date of retirement from SC</th><th>Whether CJI of SC</th><th>If yes, date of appointment as CJI</th><th>Date of Birth</th><th>State of Birth</th><th>Gender</th><th>Religion</th><th>Caste (Savarna/OBC/SC/ST)</th><th>Highest Degree Obtained from university</th><th>Year of Enrollment to Bar</th><th>Which State Bar was he enrolled in</th><th>Was Senior Advocate?</th><th>If Yes, Year of appointment as Senior Advocate</th><th>Whether direct appointee to SC?</th><th>If no, parent HC</th><th>Nature of Appointment to parent HC</th><th>Date of appointment to such parent HC addln.</th><th>Whether made permanent at parent HC?</th><th>Date of appointment to parent HC permanently</th><th>Appointment in any other HC as a judge?</th><th>Name of Such other 1</th><th>Name of Such other 2</th><th>Date of appointment to such 2</th><th>Whether CJ of a ? Y/N</th><th>If Y, how many?</th><th>Date of first appointment as CJ</th><th>Name of the HC where first appointed as CJ</th><th>Date of Second Appointment as CJ</th><th>Name of the HC where second appointed as CJ</th><th>Date of Third Appointment as CJ</th><th>Name of the HC where third appointed as CJ</th><th>Whether a trial court judge</th><th>Whether a government lawyer</th><th>If yes, what type</th><th>Area of Practice 1</th><th>Area of Practice 2</th><th>Area of Practice 3</th><th>Area of Practice 4</th><th>Area of Practice 5</th><th>Area of Practice 6</th><th>Area of Practice 7</th><th>Area of Practice 8</th><th>Area of Practice 9</th>
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
                                                    
                                            echo "<tr><td>".$name_j."</td><td>".$doa_sc."</td><td>".$dor_sc."</td><td>".$cji_sc."</td><td>".$doa_cji_sc."</td><td>".$dob."</td><td>".$state."</td><td>".$gender."</td><td>".$religion."</td><td>".$caste."</td><td>".$highest_degree."</td><td>".$bar_enrollment."</td><td>".$state_bar."</td><td>".$senior."</td><td>".$year_senior."</td><td>".$direct_appointee."</td><td>".$parent_hc."</td><td>".$nature_app."</td><td>".$doa_parent_hc_addln."</td><td>".$perm_parent_hc."</td><td>".$doa_parent_hc_perm."</td><td>".$other_hc_app."</td><td>".$other_hc_app_1."</td><td>".$other_hc_app_2."</td><td>".$doa_hc_app_2."</td><td>".$cj_hc."</td><td>".$cj_hc_count."</td><td>".$doa_first_cj."</td><td>".$hc_first_cj."</td><td>".$doa_second_cj."</td><td>".$hc_second_cj."</td><td>".$doa_third_cj."</td><td>".$hc_third_cj."</td><td>".$trial_judge."</td><td>".$govt_lawyer."</td><td>".$govt_lawyer_type."</td><td>".$aop_1."</td><td>".$aop_2."</td><td>".$aop_3."</td><td>".$aop_4."</td><td>".$aop_5."</td><td>".$aop_6."</td><td>".$aop_7."</td><td>".$aop_8."</td><td>".$aop_9."</td></tr>";
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