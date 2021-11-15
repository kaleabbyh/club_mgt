<?php 
    session_start();
    if(!isset($_SESSION['member_email'])){
        echo "<script>window.open('member_login.php','_self')</script>";
    }else{
?>


<?php

$active = 'my_account';
include("includes/header.php");

?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    My Account
                </li>
                <li>
                    My Account
                </li>
            </ul>
        </div>



        <div class="col-md-3">
           <?php 
           include("includes/sidebar.php");
           ?>
        </div>

        <div class="col-md-9">
            <div class="box">
                <?php

                if (isset($_GET['edit_account'])) {
                    include("edit_account.php");
                }
                if (isset($_GET['change_pass'])) {
                    include("change_pass.php");
                }
                
                if (isset($_GET['delete_account'])) {
                    include("delete_account.php");
                }

                ?>
            </div>
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
<?php } 
?>