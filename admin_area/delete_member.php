<?php 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }else{
?>
<?php 
    if(isset($_GET['delete_member'])){
        $delete_id = $_GET['delete_member'];
        $delete_c = "delete from members where member_id='$delete_id'";
        $run_delete = mysqli_query($con,$delete_c);
        if($run_delete){
            echo "<script>alert('One of your member has been Deleted')</script>";
            echo "<script>window.open('index.php?view_member','_self')</script>";
        }
    }
?>
<?php } ?>