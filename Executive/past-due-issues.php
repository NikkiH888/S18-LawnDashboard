<?php 
session_start();
include_once './includes/redirect-to-index.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Past Due Issues</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/grass-icon.ico"/>
    <!--===============================================================================================-->
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Include exportHTMLTableToXLS.inc.php-->
    <?php include_once './includes/exportHTMLTableToXLS.inc.php'; ?>
</head>    

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="./issues.php">Issues</a>
                </li>
                <li class="breadcrumb-item active">Past Due Issues</li>
            </ol>

            <!-- Data Tables -->
            <div class="card mb-3">
                <div class="card-header">
                    <!--Export to CSV Files-->
                    <!--===================================================================================-->
                    <form>
                        <div class="form-group pull-right">
                            <!--===========================================================================-->
                            <?php include_once './includes/past-due-issue-priority-levels.inc.php'; ?>
                            <!--===========================================================================-->
                            <button style="padding-left=100px" type="button" class="btn btn-success" data-toggle="modal" 
                                    data-target="#priorityLevelModal">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i> Priority Level
                            </button>
                            <button class="btn btn-primary" id="btnExport"
                                    onclick="javascript:xport.toCSV('dataTable','past-due-issue-table');">
                                <i class="fa fa-download" aria-hidden="true"></i> Export to CSV
                            </button>
                            
                        </div>
                    </form>
                    <!--===================================================================================-->      
                    <h4><i class="fa fa-table"></i> Past Due Issue Table</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>Issue ID</th>
                                    <th class='text-center'>Status</th>
                                    <th>Foreman Name</th>
                                    <th>Property Name</th>
                                    <th>Issue Type</th>
                                    <th>Priority</th>
                                    <th>Due Date</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <!--==================================================================-->
                                <tr>
                                    <th class='text-center'>Issue ID</th>
                                    <th class='text-center'>Status</th>
                                    <th>Foreman Name</th>
                                    <th>Property Name</th>
                                    <th>Issue Type</th>
                                    <th>Priority</th>
                                    <th>Due Date</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <!--====================================================================--> 
                                <?php include_once './includes/past-due-issues.inc.php'; ?>
                                <!--====================================================================--> 
                            </tbody>
                        </table> <!--End of Table-->
                    </div>
                </div>
                <div class="card-footer small text-muted"><br></div>
            </div>   
        </div> <!--End of <div class="container-fluid">-->
    </div> <!--End of <div class="content-wrapper">-->

    <!-- Include template-dashboard.inc.php-->
    <!--===========================================================================================-->
    <?php include_once './includes/template-dashboard.inc.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <!--===========================================================================================-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

    <!-- Priority Level Modal-->
    <!--================================================================================-->
    <div class="modal fade" id="priorityLevelModal" tabindex="-1" role="dialog" 
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--====================================================================-->
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Past-Due-Issue Priority Levels:</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <!--====================================================================-->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="row"><br><br><br><br> 
                        </div>
                    </div>
                </div>
                <!--====================================================================-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> 
        </div>
    </div>

</body>
</html>