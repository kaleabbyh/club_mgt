<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Dashboard </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"> <?php echo $count_members; ?> </div>
                            <div> members </div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_member">
                    <div class="panel-footer">
                        <span class="pull-left">
                            View Details
                        </span>
                        <span class="pull-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"> <?php echo $count_slides; ?> </div>
                            <div> slides </div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_slides">
                    <div class="panel-footer">
                        <span class="pull-left">
                            View Details
                        </span>
                        <span class="pull-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"> <?php echo $count_events; ?> </div>
                            <div> events </div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_event">
                    <div class="panel-footer">
                        <span class="pull-left">
                            View Details
                        </span>
                        <span class="pull-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"> <?php echo $count_anouncements; ?> </div>
                            <div> anouncements </div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_anouncement">
                    <div class="panel-footer">
                        <span class="pull-left">
                            View Details
                        </span>
                        <span class="pull-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


    </div><!-- row no: 2 finish -->

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="mb-md thumb-info">
                        <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive"
                        style="border-radius: 50%;  
                               width: 100px;
                               height: 100px;">
                        
                    </div>
                    <div class="mb-md">
                        <div class="widget-content-expanded">
                           <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_name; ?> <br />
                            <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br />
                            <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br />
                            <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br />
                        </div>
                        <hr class="dotted short">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
?>