<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / View members

                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View members

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> No: </th>
                                    <th> Name: </th>
                                    <th> Image: </th>
                                    <th> E-Mail: </th>
                                    <th> Country: </th>
                                    <th> City: </th>
                                    <th> Address: </th>
                                    <th> Contact: </th>
                                    <th> Delete: </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php

                                $i = 0;

                                $get_c = "select * from members";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $c_id = $row_c['member_id'];

                                    $c_name = $row_c['member_name'];

                                    $c_img = $row_c['member_image'];

                                    $c_email = $row_c['member_email'];

                                    $c_country = $row_c['member_country'];

                                    $c_city = $row_c['member_city'];

                                    $c_address = $row_c['member_address'];

                                    $c_contact = $row_c['member_contact'];

                                    $i++;

                                ?>

                                    <tr>
                                        <!-- tr begin -->
                                        <td> <?php echo $i; ?> </td>
                                        <td> <?php echo $c_name; ?> </td>
                                        <td> <img src="../member/member_images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                        <td> <?php echo $c_email; ?> </td>
                                        <td> <?php echo $c_country; ?></td>
                                        <td> <?php echo $c_city; ?> </td>
                                        <td> <?php echo $c_address ?> </td>
                                        <td> <?php echo $c_contact ?> </td>
                                        <td>

                                            <a href="index.php?delete_member=<?php echo $c_id; ?>">

                                                <i class="fa fa-trash-o"></i> Delete

                                            </a>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php } ?>