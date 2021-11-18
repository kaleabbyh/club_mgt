<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="navbar-header">
            <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        </div>

        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-user" style="padding-right:10px;"></i>
                    
                </a>
                <ul class="dropdown-menu">

                    <li>
                        <a href="index.php?view_member">
                            <i class="fa fa-fw fa-users"></i> members
                            <span class="badge"><?php echo $count_members; ?></span>
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-fw fa-power-off"></i> Log Out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="index.php?dashboard">
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#members">
                        <i class="fa fa-fw fa-tag"></i> members
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="members" class="collapse">
                        <li>
                            <a href="index.php?insert_member"> Insert member </a>
                        </li>
                        <li>
                            <a href="index.php?view_member"> View member </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#" data-toggle="collapse" data-target="#slides">
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="slides" class="collapse">
                        <li>
                            <a href="index.php?insert_slide"> Insert Slide </a>
                        </li>
                        <li>
                            <a href="index.php?view_slides"> View Slides </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#events">
                        <i class="fa fa-fw fa-gear"></i> events
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="events" class="collapse">
                        <li>
                            <a href="index.php?insert_event"> Insert event </a>
                        </li>
                        <li>
                            <a href="index.php?view_event"> View event </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#anouncements">
                        <i class="fa fa-fw fa-gear"></i> anouncements
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="anouncements" class="collapse">
                        <li>
                            <a href="index.php?insert_anouncement"> Insert anouncement </a>
                        </li>
                        <li>
                            <a href="index.php?view_anouncement"> View anouncement </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>
    </nav>


<?php  } ?>