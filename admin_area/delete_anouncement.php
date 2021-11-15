<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_anouncement'])){
        
        $delete_anouncement_id = $_GET['delete_anouncement'];
        
        $delete_event = "delete from anouncements where anouncement_id='$delete_anouncement_id'";
        
        $run_delete = mysqli_query($con,$delete_anouncement);
        
        if($run_delete){
            
            echo "<script>alert('One of Your anouncements Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_anouncement','_self')</script>";
            
        }
        
    }

?>




<?php } ?>