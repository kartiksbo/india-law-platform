<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Case Details</title>

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
                    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <u><h1 class="h4 mb-0 text-gray-800">Case Details</h1></u>
                    </div>-->

    
                    <?php

                        $kid=$_GET['kid'];

                        //Include database connection
                        include 'dbconfig.php';

                        echo "\n\n<div id='main' style='text-align: center;'>";

                        $fetch_sql="select * from sample WHERE kanoon_id=$kid";
                        $result_fetch=$conn->query($fetch_sql);
                        while($row = mysqli_fetch_array($result_fetch)){
                            $kid = $row['kanoon_id'];
                            $bench = $row['bench'];
                            $court = $row['court'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $date = $row['doc_date'];
                            $resp = $row['respondent'];
                            $pet = $row['petitioner'];
                            $jor = $row['judgment_or_order'];
                            $casetext = $row['case_text'];


                            echo "<div class='row'><div class='card shadow mb-4'> <div class='card-header py-3'> <b><h1 class='h4 mb-0 text-gray-800'>Case Details</h1></b></div> <div class='card-body'><h2>".$title."</h2><br /><div class='row'><div class='col-lg-4'><b>Court: </b>".$court."</div><div class='col-lg-4'><b>Bench: </b>".$author."</div><b><div class='col-lg-4'>Judgement Date:</b> ".$date."</div></div><br /><br /><div class='row'><div class='col-lg-5'><b>Respondent:</b> ".$resp."</div><div class='col-lg-2'>Vs</div><div class='col-lg-5'><b>Petitioner:</b> ".$pet."</div></div><br /><br /> <u>Judgement</u> <br /><br />".$casetext."<br /><br /></div></div></div>";
                        }
            

            $conn->close();
        ?>

        </div>
        <!-- /.container-fluid -->

        <div class="row">

                        <!-- Grow In Utility -->
                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Similar demands</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3 bg-gray-500 text-white"><a href="case.php?kid=412363">Rami Reddi And Ors. vs Rangamma on 7 November, 1900</a></div>
                                    <div class="p-3 bg-gray-400 text-white"><a href="case.php?kid=412363">Chemminian Pockan And Anr. vs Udayavarma Valia Rajah on 23 February, 1900</a></div>
                                    <div class="p-3 bg-gray-300 text-white"><a href="case.php?kid=412363">Kothandaramappa vs Subbanna And Anr. on 11 April, 1900</a></div>
                                    <div class="p-3 bg-gray-200 text-white"><a href="case.php?kid=412363">Raghava Charry vs Oriental Life Assurance Company on 21 March, 1900</a></div>
                                    <div class="p-3 bg-gray-100 text-white"><a href="case.php?kid=412363">Kathappudayan vs Muthappudayan on 12 March, 1900</a></div>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Similar cases</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3 bg-gray-500 text-white"><a href="case.php?kid=412363">Kathappudayan vs Muthappudayan on 12 March, 1900</a></div>
                                    <div class="p-3 bg-gray-400 text-white"><a href="case.php?kid=412363">Abdurahiman Kutti Haji vs Kunhammed Koya And Anr. on 6 February, 1900</a></div>
                                    <div class="p-3 bg-gray-300 text-white"><a href="case.php?kid=412363">Perla Kristiah And Anr. vs Boddu Narasimham And Ors. on 1 March, 1900</a></div>
                                    <div class="p-3 bg-gray-200 text-white"><a href="case.php?kid=412363">Rami Reddi And Ors. vs Rangamma on 7 November, 1900</a></div>
                                    <div class="p-3 bg-gray-100 text-white"><a href="case.php?kid=412363">Queen-Empress vs Chenchi Reddi on 19 October, 1900</a></div>
                                    
                                </div>
                            </div>


                        </div>

                    </div>

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

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>

</html>

</body>
</html>
