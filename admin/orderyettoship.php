<?php session_start();
include_once("../includes/dbconn.php");
include_once("adminfunctions.php");


if(isadminloggedin()){
    //do nothing stay here
}
else{
    header("location:login.php");
}
$seller=$_SESSION['farmercart_admin_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Farmer Cart Admin</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Anthony Fernando</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                   <?php include_once("sidebarmenu.php");?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    View All Your Orders
                    <small>
                        View Your all orders
                    </small>
                </h3>
                        </div>

                        
                    <div class="clearfix"></div>


                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Order <small> Details</small></h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Ordered User</th>
                                                <th>Shipto address</th>
                                                <th>Total Cost</th>
                                                <th>Order Date</th>
                                                <th>Orderstatus</th>
                                                <th>Order Completion date</th>
                                                <th>View Order</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //grab the product details from produc table
                                            $sql="SELECT * FROM orders WHERE orderstatus='0' ORDER BY orderdate ASC";
                                            $result=mysqlexec($sql);
                                            $serial=0;//countervariable
                                            if ($result) {
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $serial++;
                                                    $id=$row['orderid'];
                                                    $userid=$row['userid'];
                                                    $totalcost=$row['totalcost'];
                                                    $shipto=$row['shipto'];
                                                    $orderstatus=$row['orderstatus'];
                                                    $orderdate=$row['orderdate'];
                                                    $ordercompletiondate=$row['ordercompletiondate'];

                                                    //fetchin category from caegory table according to cat id
                                                    $sql2="SELECT * FROM users WHERE id = $userid";
                                                    $result2=mysqlexec($sql2);
                                                    $row2=mysqli_fetch_assoc($result2);

                                                    //printing to html table
                                                    echo "<tr>";
                                                        echo "<th>".$serial."</th>";
                                                        echo "<th scope=\"row\">". $id ."</th>";
                                                        echo "<td>" . $row2['name'] . "</td>";
                                                        echo "<td>" . $shipto . "</td>";
                                                        echo "<td>" . $totalcost . "</td>";
                                                        echo "<td>" . $orderdate . "</td>";
                                                        echo "<td>" ; 
                                                        if($orderstatus==0){
                                                            echo "Not Shipped";
                                                        }else{
                                                            echo "Shipped";
                                                        }
                                                        echo "</td>";
                                                        echo "<td>" ;
                                                        if($ordercompletiondate=='0000-00-00'){
                                                            echo "<font color=\"red\">Item is yet to ship</font>";
                                                        }else{
                                                            echo "<font color=\"green\">".$ordercompletiondate."</font>";
                                                        }
                                                        echo "</td>";
                                                        echo "<td><a href=\"vieworderdetail.php?orderid={$id}\">" .  "view/update" .  "</a></td>";
                                                    echo "</tr>";
                                                }
                                            
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


            

                        <div class="clearfix"></div>
            
                    </div>

                </div>

                <!-- footer content -->
                <?php include_once("footer.php");?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

</body>

</html>