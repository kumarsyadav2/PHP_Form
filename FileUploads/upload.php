<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// To check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ". \n";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// To check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.\n";
    $uploadOk = 0;
}


// To check File size
if($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.\n";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jfif" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf" && $imageFileType != "gif" ) {
    echo "\nSorry, only PDF, JPG, JPEG, JFIF, PNG AND GIF FILES ARE ALLOWED.\n";
    $uploadOk = 0;
}

//  Check if $uploadOk is set to 0 by an error
if($uploadOk == 0) {
    echo "\nSorry, your file was not uploaded.\n";
} else {
    // if everything is ok, try to upload file
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
        echo "\nThe file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "\nSorry, there was an error uploading your file.";
    }
}
?>
<!-- pdfs files are not working now, we have to fix this later. -->