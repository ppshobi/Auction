<?php session_start();
include_once("../includes/dbconn.php");
include_once("adminfunctions.php");

if(isloggedin()){
    //do nothing stay here
}
else{
    header("location:login.php");
}
if (isset($_SESSION['auction_admin_id'])) {
    $seller=$_SESSION['auction_admin_id'];
}else{
     header("location:login.php");
}

$prodid=$_GET['prodid'];
?>
<?php 
updateproduct($prodid);

?>

<?php

//gather content for selected product
$name='';
$descr='';
$cat='';
$minbid='';
$unit='';
$bidstartdate='';
$bidenddate='';
$visibility='';

$sql= "SELECT * FROM product WHERE id = $prodid";
$result = mysqlexec($sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $descr=$row['descr'];
    $catid=$row['category'];
    $minbid=$row['minbid'];
    $unit=$row['unit'];
    $bidstartdate=$row['bidstartdate'];
    $bidenddate=$row['bidenddate'];
    $visibility=$row['visibility'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Auction Admin</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="css/switchery/switchery.min.css" />

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
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Online Auction</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- menu prile quick info -->
                    <?php include_once("menuprofile.php");?>
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
                            <h3>Edit Product</h3>
                        </div>
                      
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product ID = <?php echo $prodid;?></h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form"  class="form-horizontal form-label-left" enctype="multipart/form-data" data-parsley-validate method="post">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="name"id="first-name" value="<?php echo $name; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="control-label col-md-3 col-sm-3 col-xs-12">Product Description (20 chars min, 1000 max) :</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="descr" required="required" class="form-control"  name="descr" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="1000" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long Description.." data-parsley-validation-threshold="10"><?php echo $descr; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="heard" class="control-label col-md-3 col-sm-3 col-xs-12">Category *:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="category" name="cat" class="form-control" required>
                                                    <option value="<?php echo $catid; ?>"><?php echo $cat;?></option>
                                                    <?php
                                                    $sql="SELECT * FROM category";
                                                    $result=mysqlexec($sql);
                                                    while ($row=mysqli_fetch_assoc($result)) {
                                                        $cat=$row['cat'];
                                                        $catid=$row['id'];
                                                        echo "<option value=\"".$catid."\">". $cat ."</option>";
                                                    }
                                                    ?>
                                                   
                                                    
                                                        
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Minimum Bid <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $minbid; ?>" id="last-name" name="minbid" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                         <label for="unit" class="control-label col-md-3 col-sm-3 col-xs-12">Unit *:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="unit" id="unit" class="form-control" required>
                                                    <option value="<?php echo $unit; ?>">Choose..</option>
                                                    <option value="Kg">Kg</option>
                                                    <option value="Meter">Meter</option>
                                                    <option value="Litre">Litre</option>
                                                    <option value="Litre">Nos</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="qty" class="control-label col-md-3 col-sm-3 col-xs-12">Bid Start Date</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="start" class="form-control col-md-7 col-xs-12" value="<?php echo $bidstartdate;?>" type="date" name="start">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="qty" class="control-label col-md-3 col-sm-3 col-xs-12">Bid End Date</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="end" class="form-control col-md-7 col-xs-12" value="<?php echo $bidenddate;?>"type="date" name="end">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="Visibility" class="control-label col-md-3 col-sm-3 col-xs-12">Visibility</label>
                                            <div class="radio col-md-6 col-sm-6 col-xs-12">
                                                <input type="radio" class="flat" value="1" <?php if($visibility==1){echo "checked";}?> name="visibility"/>Public
                                                <input type="radio" class="flat" value="0" <?php if($visibility==0){echo "checked";}?> name="visibility"/> Draft
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Update Product</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>


                    <div class="row">
                        <div class="col-md-6 col-xs-12">                            
                            <!-- start form for validation -->
                            <form id="demo-form2" data-parsley-validate>

                            </form>
                            <!-- end form for validations I don't know why the hell the validation doesnot work when removed -->
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <?php include_once("footer.php");?>
                <!-- /footer content -->

            </div>

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
        <!-- tags -->
        <script src="js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="js/moment.min2.js"></script>
        <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
        <!-- dropzone -->
        <script src="js/dropzone/dropzone.js"></script>

        <script src="js/editor/external/jquery.hotkeys.js"></script>
        <script src="js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
      
        <script src="js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        
        <!-- form validation -->
        <script type="text/javascript">
        
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').php());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>
</html>