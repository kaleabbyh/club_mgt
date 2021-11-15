<div class="panel panel-default sidebar-menu">
    <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
            <?php
            $member_session = $_SESSION['member_email'];
            $get_member = "select * from members where member_email='$member_session'";
            $run_member = mysqli_query($con, $get_member);
            $row_member = mysqli_fetch_array($run_member);
            $member_image = $row_member['member_image'];
            $member_name = $row_member['member_name'];
            if (!isset($_SESSION['member_email'])) {
            } else {

                echo "
                                
                                    <center>
                                    
                                        <img src='member_images/$member_image' class='img-responsive' >
                                    
                                    </center>
                                    
                                    <br/>
                                    
                                    <h3 class='panel-title' align='center'>
                                    
                                        Name: $member_name
                                    
                                    </h3>
                                
                                ";
            }

            ?>

        </div><!--  panel-heading Finish  -->

        <div class="panel-body">
            <ul class="nav-pills nav-stacked nav">
                <li>
                    <a href="my_account.php?edit_account">
                        <i class="fa fa-pencil"></i> Edit Account
                    </a>
                </li>

                <li>
                    <a href="my_account.php?change_pass">
                        <i class="fa fa-user"></i> Change Password
                    </a>
                </li>

                <li>

                    <a href="my_account.php?delete_account">

                        <i class="fa fa-trash-o"></i> Delete Account
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log Out
                    </a>
                </li>
            </ul><!--  nav-pills nav-stacked nav Begin  -->
        </div><!--  panel-body Finish  -->
    </div><!--  panel panel-default sidebar-menu Finish  -->
</div>