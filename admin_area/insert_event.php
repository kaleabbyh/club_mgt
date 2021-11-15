
<div id="content">
    <div class="container">
        
      

        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2> Insert A New event </h2>
                    </center>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" class="form-control" name="e_title" required>
                        </div>
                        
                        <div class="form-group">
                            <label> image1</label>
                            <input type="file" class="form-control form-height-custom" name="e_image1" required>
                        </div>

                        <div class="form-group">
                            <label> image2</label>
                            <input type="file" class="form-control form-height-custom" name="e_image2" >
                        </div>

                        <div class="form-group">
                            <label> image3</label>
                            <input type="file" class="form-control form-height-custom" name="e_image3" >
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
    $e_image2 = $_FILES['e_image2']['name'];
    $e_image3 = $_FILES['e_image3']['name'];
    $e_image_tmp1 = $_FILES['e_image1']['tmp_name'];
    $e_image_tmp2 = $_FILES['e_image2']['tmp_name'];
    $e_image_tmp3 = $_FILES['e_image3']['tmp_name'];
    move_uploaded_file($e_image_tmp1, "event_image/$e_image1");
    move_uploaded_file($e_image_tmp2, "event_image/$e_image2");
    move_uploaded_file($e_image_tmp3, "event_image/$e_image3");

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_event = "insert into events (date,event_title,event_img1,event_img2,event_img3,event_desc) values ( NOW(),'$e_title','$e_image1','$e_image3','$e_image3','$e_desc')";
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