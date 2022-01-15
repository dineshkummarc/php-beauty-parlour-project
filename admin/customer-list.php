<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<?php
if (isset($_GET['action'])) {
    $vip = isset($_GET['vip']) ? $conn->real_escape_string($_GET['vip']) : false;
    $usid = $conn->real_escape_string($_GET['id']);
    if ($vip !== false) {
        $sql = "UPDATE tblcustomers ";
        $sql .= "SET Type = '2' WHERE ID = '{$usid}'";
        if ($conn->query($sql)) {
            echo "<script>alert('Customer info updated');</script>";
            echo "<script>window.location.href = 'customer-list.php'</script>";
        } else echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>BTMS ||Customer List</title>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
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
        <?php include_once('includes/sidebar.php'); ?>
        <?php include_once('includes/header.php'); ?>
        <style>
            .customer-tabs .nav-tabs>li.active>a {
                border: 0;
                background: #4f52ba;
                border-radius: 0;
                color: #fff;
            }

            .customer-tabs .tab-pane {
                padding: 1rem;
                border: 1px solid #ddd;
                border-top: 0
            }
        </style>
        <div id="page-wrapper">
            <div class="main-page customer-tabs">
                <div class="tables">
                    <h3 class="title1">Customer List</h3>
                    <div class="table-responsive bs-example widget-shadow">
                        <?php
                        $ret = mysqli_query($con, "select * from  tblcustomers where 1");
                        if ($ret->num_rows > 0) {
                            $cnt = 1;
                        ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Creation Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($ret)) { ?>
                                        <tr>
                                            <th scope="row"><?= $cnt ?></th>
                                            <td><?= $row['Name']; ?></td>
                                            <td><?= $row['MobileNumber']; ?></td>
                                            <td><?= $row['Email']; ?></td>
                                            <td><?= $row['Gender']; ?></td>
                                            <td><?= $row['CreationDate']; ?></td>
                                        </tr>
                                    <?php
                                        $cnt = $cnt + 1;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-danger">
                                No customer found !
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php include_once('includes/footer.php'); ?>
        <!--//footer-->
    </div>
    <!-- Classie -->
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
    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
</body>

</html>