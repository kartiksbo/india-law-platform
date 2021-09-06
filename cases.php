<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cases</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cases</h1>
                    </div>

                    <!--<div id='fields' class="row">
                    <div class="container px-5 my-5">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCaseDomain" aria-label="Select Case Domain">
                                    <option value="All">All</option>
                                    <option value="Criminal">Criminal</option>
                                    <option value="Environment">Environment</option>
                                </select>
                                <label for="selectCaseDomain">Select Case Domain</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCourt" aria-label="Select Court">
                                    <option value="All">All</option>
                                    <option value="Supreme Court">Supreme Court</option>
                                    <option value="High Courts">High Courts</option>
                                    <option value="District Courts">District Courts</option>
                                    <option value="Other Courts">Other Courts</option>
                                </select>
                                <label for="selectCourt">Select Court</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCaseType" aria-label="Select Case Type">
                                    <option value="All">All</option>
                                    <option value="First Appeal">First Appeal</option>
                                    <option value="Writ Petition">Writ Petition</option>
                                    <option value="Revision">Revision</option>
                                    <option value="Appeal">Appeal</option>
                                    <option value="Miscellaneous">Miscellaneous</option>
                                </select>
                                <label for="selectCaseType">Select Case Type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCaseResult" aria-label="Select Case Result">
                                    <option value="All">All</option>
                                    <option value="Petitioner Granted">Petitioner Granted</option>
                                    <option value="Defendant Granted">Defendant Granted</option>
                                    <option value="Both Granted">Both Granted</option>
                                </select>
                                <label for="selectCaseResult">Select Case Result</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCourtLocation" aria-label="Select Court Location">
                                    <option value="All">All</option>
                                    <option value="Bombay High Court">Bombay High Court</option>
                                    <option value="Calcutta High Court">Calcutta High Court</option>
                                    <option value="Delhi High Court">Delhi High Court</option>
                                    <option value="Madras High Court">Madras High Court</option>
                                </select>
                                <label for="selectCourtLocation">Select Court Location</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="isGovernmentAPartyToTheCase" type="checkbox" name="isGovernmentAPartyToTheCase" />
                                    <label class="form-check-label" for="isGovernmentAPartyToTheCase">Is Government a party to the case?</label>
                                </div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->

                    <form>
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 col-md-2">
                                    <label for="exampleFormControlSelect1">Select Domain</label><select class="form-control" id="exampleFormControlSelect1">
                                        <option value="All">All</option>
                                        <option value="Criminal">Criminal</option>
                                        <option value="Environment">Environment</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-2">
                                    <label for="exampleFormControlSelect2">Select Court Type</label><select class="form-control" id="exampleFormControlSelect2">
                                        <option value="All">All</option>
                                        <option value="Supreme Court">Supreme Court</option>
                                        <option value="High Courts">High Courts</option>
                                        <option value="District Courts">District Courts</option>
                                        <option value="Other Courts">Other Courts</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-2">
                                        <label for="selectCaseType">Select Case Type</label>
                                        <select class="form-control" id="selectCaseType" aria-label="Select Case Type">
                                            <option value="All">All</option>
                                            <option value="First Appeal">First Appeal</option>
                                            <option value="Constituional">Constituional</option>
                                            <option value="Writ Petition">Writ Petition</option>
                                            <option value="Revision">Revision</option>
                                            <option value="Appeal">Appeal</option>
                                            <option value="Miscellaneous">Miscellaneous</option>
                                        </select>
                                        
                                </div>
                                <div class="mb-3 col-md-2">
                                        <label for="selectCaseResult">Select Case Result</label>
                                        <select class="form-control" id="selectCaseResult" aria-label="Select Case Result">
                                            <option value="All">All</option>
                                            <option value="Petitioner Granted">Petitioner Granted</option>
                                            <option value="Defendant Granted">Defendant Granted</option>
                                            <option value="Both Granted">Both Granted</option>
                                        </select>
                                </div>
                                <div class="mb-3 col-md-2">
                                        <label for="selectCourtLocation">Select Court</label>
                                        <select class="form-control" id="selectCourtLocation" aria-label="Select Court Location">
                                            <option value="All">All</option>
                                            <option value="Supreme Court">Supreme Court</option>
                                            <option value="Bombay High Court">Bombay High Court</option>
                                            <option value="Calcutta High Court">Calcutta High Court</option>
                                            <option value="Delhi High Court">Delhi High Court</option>
                                            <option value="Madras High Court">Madras High Court</option>
                                        </select>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <div class="form-check form-switch">
                                            <label class="form-check-label" for="isGovernmentAPartyToTheCase">Is Govt a party?</label><div class="my-2"></div>
                                            <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            <div id="console-event"></div>
                                            <script>
                                              $(function() {
                                                $('#toggle-event').change(function() {
                                                  $('#console-event').html('Toggle: ' + $(this).prop('checked'))
                                                })
                                              })
                                            </script>
                                    </div>
                                </div>
                            </div>
                            <div style='text-align: center'>
                                <a href='#' class='btn btn-info btn-icon-split' type='submit'>
                                    <span class='icon text-white-50'>
                                        <i class='fas fa-info-circle'></i>
                                    </span>
                                    <span class='text'>Filter</span>
                                </a>
                            </div>
                        </div>
                        <div class="my-4"></div>

                    </form>

                    <div id='main' class="row">

                    <?php 
                        //Include database connection
                        include 'dbconfig.php';

                        $count_sql="SELECT count(*) FROM sample";
                        $count_fetch=$conn->query($count_sql);
                        while($rc = mysqli_fetch_array($count_fetch))
                            $totalCount = $rc['count(*)'];
                        $pageNos=$totalCount/9;

                        $fetch_sql="select * from sample ORDER BY id LIMIT 9";
                        $result_fetch=$conn->query($fetch_sql);
                        while($row = mysqli_fetch_array($result_fetch)){
                            $kid = $row['kanoon_id'];
                            $court = $row['court'];
                            $title = $row['title'];
                            $date = $row['doc_date'];
                            $resp = $row['respondent'];
                            $pet = $row['petitioner'];
                            $jor = $row['judgment_or_order'];
                            $casetext = $row['case_text'];
                                    
                            $casetext_s = substr($casetext, 0, strrpos(substr($casetext, 0, 200), ' '));

                            echo "<br /><br /><div class='col-xl-4 col-md-6 mb-4'><div class='card border-left-primary shadow h-100 py-2'><div class='d-sm-flex align-items-center justify-content-between mb-1'> Madras High Court<a href='#' class='d-none d-sm-inline-block btn btn-sm btn-success shadow-sm'><span class='icon text-white-50'> <i class='fas fa-flag'></i> </span> <span class='text'>Environment</span></a> </div><div class='card-header'><h6 class='m-0 font-weight-bold text-primary'><a href='case.php?kid=$kid'>".$title."</a></h6></div><div class='card-body'>".$casetext_s."...<br /><br /><div style='text-align: center'> <a href='case.php?kid=$kid' class='btn btn-info btn-icon-split' type='submit'><span class='text'>Read More</span> </a> </div></div></div></div>";
                        }
                    ?>

                        
                    </div>

                    <a onclick='loadNext()' class="btn btn-light btn-icon-split" style="padding-left: 50%;">
                        <span class="icon text-gray-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Next</span>
                    </a>

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

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <script>
    var count=0;
    function loadNext() {
        count=count+9;
        $("#main").load("loadnext.php", {
                    count: count
                });
    }
    </script>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>

</html>