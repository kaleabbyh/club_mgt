<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        $get_admin = "select * from admins where admin_email='$admin_session'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);
        $admin_id = $row_admin['admin_id'];
        $admin_name = $row_admin['admin_name'];
        $admin_email = $row_admin['admin_email'];
        $admin_image = $row_admin['admin_image'];
        $admin_country = $row_admin['admin_country'];
        $admin_contact = $row_admin['admin_contact'];
        
        
        $get_members = "select * from members";
        $run_members = mysqli_query($con,$get_members);
        $count_members = mysqli_num_rows($run_members);

        $get_slides = "select * from slider";
        $run_slides = mysqli_query($con,$get_slides);
      $count_slides = mysqli_num_rows($run_slides);

        $get_events = "select * from events";
        $run_events = mysqli_query($con,$get_events);
      $count_events = mysqli_num_rows($run_events);

        $get_anouncements = "select * from anouncements";
        $run_anouncements = mysqli_query($con,$get_anouncements);
      $count_anouncements = mysqli_num_rows($run_anouncements);

        include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
       <?php include("includes/sidebar.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php
                
                if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }  if(isset($_GET['insert_member'])){
                        
                    include("insert_member.php");
                    
                }   if(isset($_GET['view_member'])){
                        
                        include("view_member.php");
                        
                }   if(isset($_GET['delete_member'])){
                        
                        include("delete_member.php");
                        
                }   if(isset($_GET['edit_member'])){
                        
                    include("edit_member.php");
                    
                } if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }   if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }   if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }   if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                }  if(isset($_GET['insert_event'])){
                        
                        include("insert_event.php");
                        
                }   if(isset($_GET['view_event'])){
                        
                        include("view_event.php");
                        
                }   if(isset($_GET['delete_event'])){
                        
                        include("delete_event.php");
                        
                }   if(isset($_GET['edit_event'])){
                        
                        include("edit_event.php");
                        
                } if(isset($_GET['insert_anouncement'])){
                        
                        include("insert_anouncement.php");
                        
                }   if(isset($_GET['view_anouncement'])){
                        
                        include("view_anouncement.php");
                        
                }   if(isset($_GET['delete_anouncement'])){
                        
                        include("delete_anouncement.php");
                        
                }   if(isset($_GET['edit_anouncement'])){
                        
                        include("edit_anouncement.php");
                        
                }            if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }   if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }   
        
                ?>
                
            </div>
        </div>
    </div>

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>