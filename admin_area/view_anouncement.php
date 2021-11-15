<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / View anouncements

                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View anouncement
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> id: </th>
                                    <th> title: </th>
                                    <th> date: </th>
                                    <th> description: </th>
                                    <th> Image1: </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $i = 0;
                                $get_events = "select * from anouncements";
                                $run_event = mysqli_query($con, $get_events);

                                while ($row_events = mysqli_fetch_array($run_event)) {
                                    $e_id = $row_events['anouncement_id'];
                                    $e_date = $row_events['date'];
                                    $e_title = $row_events['anouncement_title'];
                                    $e_img1 = $row_events['anouncement_img1'];
                                    $e_desc = $row_events['anouncement_desc'];

                                    $i++;

                                ?>

                                    <tr>
                                        <td> <?php echo $e_id; ?> </td>
                                        <td> <?php echo $e_title; ?> </td>
                                        <td> <?php echo $e_date; ?> </td>
                                        <td> <?php echo $e_desc; ?> </td>
                                        <td> <img src="event_image/<?php echo $e_img1; ?>" width="60" height="60"></td>


                                        <td>

                                            <a href="index.php?delete_anouncement=<?php echo $e_id; ?>">

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