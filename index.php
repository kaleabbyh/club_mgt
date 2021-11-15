<?php 
    session_start();
    if(!isset($_SESSION['member_email'])){
        echo "<script>window.open('member/member_login.php','_self')</script>";
    }else{
?>


<?php

$active = 'Home';
include("includes/header.php");

?>

<div class="container" id="slider">
    <div class="same-height-row">
        <div class="col-md-8">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                    <?php
                    $get_slides = "select * from slider LIMIT 0,1";
                    $run_slides = mysqli_query($con, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slides)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];
                        echo "
                       
                       <div class='item active'>
                           <a href='$slide_url'>
                                <img src='admin_area/slides_images/$slide_image'>
                           </a>
                       </div>
                       ";
                    }
                    $get_slides = "select * from slider LIMIT 1,3";
                    $run_slides = mysqli_query($con, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slides)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];
                        echo "
                       <div class='item'>
                           <a href='$slide_url'>
                                <img src='admin_area/slides_images/$slide_image'>
                           </a>
                       </div>
                       ";
                    }
                    ?>

                </div>
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4" id="anouncement">
            <?php
            $get_events = "select * from anouncements order by 1 DESC LIMIT 0,1";
            $run_event = mysqli_query($con, $get_events);

            while ($row_events = mysqli_fetch_array($run_event)) {
                $e_id = $row_events['anouncement_id'];
                $e_date = $row_events['date'];
                $e_title = $row_events['anouncement_title'];
                $e_img1 = $row_events['anouncement_img1'];
                $e_desc = $row_events['anouncement_desc'];
            ?>
                <div class="box same-height">
                    <h4><a href="#anouncement">Our Latest anouncements</a></h4>
                    <h4><a href="#anouncement"><?php echo $e_title; ?></a></h4>
                    <p> <?php echo $e_desc; ?> </p>
                    <img style="height:150px; flex:right;" src='admin_area/event_image/<?php echo $e_img1; ?>'>
                </div>
            <?php    } ?>

        </div>
    </div>
</div>

<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>
                    Events of CSE club
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="advantages">
    <div id="event" class="container">
        <div class="same-height-row">
            <?php

            $get_events = "select * from events order by 1 DESC LIMIT 0,3";
            $run_event = mysqli_query($con, $get_events);

            while ($row_events = mysqli_fetch_array($run_event)) {
                $e_date = $row_events['date'];
                $e_title = $row_events['event_title'];
                $e_img1 = $row_events['event_img1'];
                $e_img2 = $row_events['event_img2'];
                $e_img3 = $row_events['event_img3'];
                $e_desc = $row_events['event_desc'];

            ?>

                <div class="col-sm-8">
                    <div class="box same-height">
                        <h3><a href="#event"><?php echo $e_title; ?></a></h3>
                        <p> <?php echo $e_desc; ?> </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">

                        <a href="#">
                            <img style="height:220px;" src='admin_area/event_image/<?php echo $e_img1; ?>'>
                        </a>
                    </div>
                </div>

            <?php    } ?>

        </div>

    </div>
</div>



<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>

<?php } ?>