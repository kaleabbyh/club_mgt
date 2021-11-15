
<div id="content">
    <div class="container">
        
      

        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2> Insert A New anouncement </h2>
                    </center>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" class="form-control" name="e_title" required>
                        </div>
                        
                        <div class="form-group">
                            <label> image1</label>
                            <input type="file" class="form-control form-height-custom" name="e_image1" >
                        </div>


                        <div class="form-group">
                            <label>description</label>
                            <textarea name="e_desc" cols="19" rows="6" class="form-control"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="add" class="btn btn-primary">
                                add event
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
if (isset($_POST['add'])) {
    $e_title = $_POST['e_title'];
    $e_desc = $_POST['e_desc'];

    $e_image1 = $_FILES['e_image1']['name'];
    $e_image_tmp1 = $_FILES['e_image1']['tmp_name'];
    move_uploaded_file($e_image_tmp1, "event_image/$e_image1");


    $insert_event = "insert into anouncements (date,anouncement_title,anouncement_img1,anouncement_desc) values ( NOW(),'$e_title','$e_image1','$e_desc')";
    $run_event = mysqli_query($con, $insert_event);

    if ($run_event) {
        echo "<script>alert('You have added event Sucessfully')</script>";
        echo "<script>window.open('index.php'?dashboard,'_self')</script>";
    } else {
        echo "<script>alert('event adding is unSucessfully')</script>";
        echo "<script>window.open('index.php?dashboard','_self')</script>";
    }
}

?>