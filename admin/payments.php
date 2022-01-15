<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>BTMS || Payments</title>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <?php include_once('includes/sidebar.php'); ?>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <?php include_once('includes/header.php'); ?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h3 class="title1">Payments</h3>
                    <div class="table-responsive bs-example widget-shadow">
                        <div class="text-right">
                            <a href="new-payments.php" class="btn btn-success"><i class="fa fa-plus"></i> New Payment</a>
                        </div>
                        <div style="height: 10px"></div>
                        <table class="table table-bordered">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Payment Id</th>
                                        <th>Customer Info</th>
                                        <th>Services</th>
                                        <th>Method</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $qSql = "SELECT * FROM tblpayments ";
                                    $qSql .= "LEFT JOIN tblcustomers ON tblpayments.cus_id = tblcustomers.ID ORDER BY tblpayments.id DESC";
                                    $ret = mysqli_query($con, $qSql);
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $cnt ?></th>
                                            <td><?= sprintf('%06d', $row['pmnt_id']) ?></td>
                                            <td>
                                                <p><?= $row['Name']; ?></p>
                                                <p class="text-muted"><small>Mobile Number: <?= $row['MobileNumber'] ?></small></p>
                                            </td>
                                            <td>
                                                <?php
                                                $total_cost = 0;
                                                $ser_array = explode(",", $row['services']);
                                                foreach ($ser_array as $ser_id) {
                                                    $service_info = $con->query("SELECT ServiceName, Cost FROM tblservices WHERE ID='{$ser_id}'")->fetch_array();
                                                    echo '<div style="margin-bottom: 5px">';
                                                    echo '	<p>' . $service_info['ServiceName'] . '</p>';
                                                    echo '	<p style="font-size:12px;color:#888">Cost: Tk.' . $service_info['Cost'] . '</p>';
                                                    echo '</div>';
                                                    $total_cost += $service_info['Cost'];
                                                }
                                                ?>
                                            </td>
                                            <td><?= $row['method']; ?></td>
                                            <td><?= date("j M, Y (H:i)", strtotime($row['date_of_pmnt'])) ?></td>
                                            <td>Tk.<?= $total_cost ?></td>
                                            <td>
                                                <a class="btn btn-success" href="invoice.php?inv_id=<?= $row['pmnt_id'] ?>" target="_blank"><i class="fa fa-file"></i> Invoice</a>
                                                <p><a href="edit-payment.php?id=<?= $row['id'] ?>"><i class="fa fa-pencil"></i> Update</a></p>
                                            </td>
                                        </tr>
                                    <?php
                                        $cnt++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;
        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.js"> </script>
</body>

</html>