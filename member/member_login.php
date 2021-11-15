<?php

$active = 'my_account';


?>

<?php

session_start();

include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSE CLUB</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="member_login">




    <div class="login-box" >
        <div class="row" style="margin: 0 0 0 0; color: white;">
            <center>
            <h3> <b>CSE Club</b></h3>
            </center>
        </div>
        <div class="container">


            
            <div class="col-md-4">
                <div class="login_box">


                    <form method="post">
                        <div class="form-group">
                            <label> Email </label>
                            <input name="c_email" type="text" class="form-control" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input name="c_pass" type="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="text-center">
                            <button name="login" value="Login" class="btn btn-primary">
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </div>
                    </form>
                    <center>
                        <!-- <a href="member_register.php">
                            <h4> Dont have account..? Register here </h4>
                        </a> -->
                    </center>
                </div>
            </div>
        </div>
        
    </div>






    <?php

    if (isset($_POST['login'])) {
        $member_email = $_POST['c_email'];
        $member_pass = $_POST['c_pass'];
        $select_member = "select * from members where member_email='$member_email' AND member_pass='$member_pass'";
        $run_member = mysqli_query($con, $select_member);

        if ($run_member) {
            $_SESSION['member_email'] = $member_email;
            echo "<script>window.open('../index.php','_self')</script>";
        } else {
            echo "<script>alert('Your email or password is wrong')</script>";
            exit();
        }
    }
    ?>
 
    </body>
</html>