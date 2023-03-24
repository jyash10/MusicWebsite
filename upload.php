<?php

include("db.php");
if(isset($_POST['upload']))
 {
//     $name=$_FILES['file'];
//     echo "<pre>";
//     print_r($name);
//     exit();
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_destination="upload/".$file_name;
    $lang=$_POST['language'];
    $songname=$_POST['sname'];
    // $cat1=$_POST['catgy'];
    if(move_uploaded_file($temp_name,$file_destination)){
        $q="INSERT into songs(language,songname,songfile) values('$lang','$songname','$file_name')";
    }
    if(mysqli_query($con,$q))
    {
        $success="music uploaded succesfully";
    }
    else{
        $failed="Something went wrong";
    }

}
else{
    $msz="Please select a music to upload";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Upload song</title>
</head>
<body>
    <div class="conatiner mt-3">
        <h1 class="text-center mb-5"><b>Upload song</b>
</h1>
<div class="col-lg-8-m-auto">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label><strong>upload a video:</strong></label>
            <input type="file" name="file" class="form-control">
</div>
<?php if(isset($success)){ ?>
    <div class="alert alert-success">
        <?php echo $success;?>
</div>
<?php }?>
<?php if(isset($failed)) { ?>
    <div class="alert alert-danger">

    <?php echo $failed;?>
</div>
<?php } ?>
<?php if(isset($msz)){ ?>
    <div class="alert alert-danger">

    <?php echo $msz;?>
</div>
<?php } ?>
Language:<input type="text" name="language" value="language">
Songname:<input type="text" name="sname" value="sname">
<!-- Category:<input type="text" name="catgy" value="catgy"> -->
<input type="submit" name="upload" value="Upload" class="btn btn-success ml-3">
</form>
</div>
</div>
</body>
</html>