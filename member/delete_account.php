<?php 
    
    if(!isset($_SESSION['member_email'])){
        echo "<script>window.open('member/member_login.php','_self')</script>";
    }else{
?>

<center>
    <h2> Do You Realy Want To Delete Your Account ? </h3>   
    <form action="" method="post">        
       <input type="submit" name="Yes" value="Yes, I Want To Delete" class="btn btn-danger">         
       <input type="submit" name="No" value="No, I Dont Want To Delete" class="btn btn-primary">        
    </form>   
</center>


<?php 

$c_email = $_SESSION['member_email'];
if(isset($_POST['Yes'])){   
    $delete_member = "delete from members where member_email='$c_email'";    
    $run_delete_member = mysqli_query($con,$delete_member);    
    if($run_delete_member){       
        session_destroy();       
        echo "<script>alert('Successfully delete your account, feel sorry about this. Good Bye')</script>";        
        echo "<script>window.open('../index.php','_self')</script>";       
    }   
}
if(isset($_POST['No'])){   
    echo "<script>window.open('my_account.php','_self')</script>";   
}
?>
<?php } ?>