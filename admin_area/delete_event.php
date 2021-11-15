<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_event'])){
        
        $delete_event_id = $_GET['delete_event'];
        
        $delete_event = "delete from events where event_id='$delete_event_id'";
        
        $run_delete = mysqli_query($con,$delete_event);
        
        if($run_delete){
            
            echo "<script>alert('One of Your event Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_event','_self')</script>";
            
        }
        
    }

?>




<?php } ?>