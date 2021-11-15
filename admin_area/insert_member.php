
<div id="content">
    <div class="container">
        
      

        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2> Insert A New Member </h2>
                    </center>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="c_country" required>
                        </div>
                        <div class="form-group">
                            <label> City</label>
                            <input type="text" class="form-control" name="c_city" required>
                        </div>
                        <div class="form-group">
                            <label> Contact</label>
                            <input type="text" class="form-control" name="c_contact" required>
                        </div>
                        <div class="form-group">
                            <label> Address</label>
                            <input type="text" class="form-control" name="c_address" required>
                        </div>
                        <div class="form-group">
                            <label> Profile Picture</label>
                            <input type="file" class="form-control form-height-custom" name="c_image" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>



<?php
if (isset($_POST['register'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_ip = getRealIpUser();
    move_uploaded_file($c_image_tmp, "member/member_images/$c_image");
    $insert_member = "insert into members (member_name,member_email,member_pass,member_country,member_city,member_contact,member_address,member_image,member_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_member = mysqli_query($con, $insert_member);

    if ($run_member) {
        $_SESSION['member_email'] = $c_email;
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        echo "<script>window.open('index.php'?dashboard,'_self')</script>";
    } else {
        echo "<script>alert('You have been Registeration unSucessfully')</script>";
        echo "<script>window.open('index.php?dashboard','_self')</script>";
    }
}

?>