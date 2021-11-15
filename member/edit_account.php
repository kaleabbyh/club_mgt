<?php 
    session_start();
    if(!isset($_SESSION['member_email'])){
        echo "<script>window.open('member/member_login.php','_self')</script>";
    }else{
?>


<?php

$member_session = $_SESSION['member_email'];
$get_customer = "select * from members where member_email='$member_session'";
$run_member = mysqli_query($con, $get_member);
$row_member = mysqli_fetch_array($run_member);
$member_id =   $row_member['member_id'];
$member_name = $row_member['member_name'];
$member_email = $row_member['member_email'];
$member_country = $row_member['member_country'];
$member_city = $row_member['member_city'];
$member_contact = $row_member['member_contact'];
$member_address = $row_member['member_address'];
$member_image = $row_member['member_image'];

?>

<h1 align="center"> Edit Your Account </h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> member Name: </label>
        <input type="text" name="c_name" class="form-control" value="<?php echo $member_name; ?>" required>
    </div>
    <div class="form-group">
        <label> member Email: </label>
        <input type="text" name="c_email" class="form-control" value="<?php echo $member_email; ?>" required>
    </div>
    <div class="form-group">
        <label> member Country: </label>
        <input type="text" name="c_country" class="form-control" value="<?php echo $member_country; ?>" required>
    </div>
    <div class="form-group">
        <label> member City: </label>
        <input type="text" name="c_city" class="form-control" value="<?php echo $member_city; ?>" required>
    </div>
    <div class="form-group">
        <label> member Contact: </label>
        <input type="text" name="c_contact" class="form-control" value="<?php echo $member_contact; ?>" required>
    </div>
    <div class="form-group">
        <label> member Address: </label>
        <input type="text" name="c_address" class="form-control" value="<?php echo $member_address; ?>" required>
    </div>
    <div class="form-group">
        <label> member Image: </label>
        <input type="file" name="c_image" class="form-control form-height-custom">
        <img class="img-responsive" src="customer_images/<?php echo $member_image; ?>" alt="Costumer Image">
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now

        </button>
    </div>
</form>
<?php

if (isset($_POST['update'])) {
    $update_id = $member_id;
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_address = $_POST['c_address'];
    $c_contact = $_POST['c_contact'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    move_uploaded_file($c_image_tmp, "member_images/$c_image");
    $update_member = "update members set member_name='$c_name',member_email='$c_email',member_country='$c_country',member_city='$c_city',member_address='$c_address',member_contact='$c_contact',member_image='$c_image' where member_id='$update_id' ";
    $run_member = mysqli_query($con, $update_member);
    if ($run_member) {
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }
}

?>


<?php } ?>