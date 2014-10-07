<?php
$id = $_POST["textfield_user"];
//for server path:
//$target_path = "/home/a7611291/public_html/imgs/uploads/".$id."/";

//for localhost:
$target_path = "uploads/".$id."/";

if (!file_exists($target_path)) {
    mkdir($target_path,0777); 
    echo "The directory $id was successfully created.";
    
} else {
    echo "The directory $id exists.";
}

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

header("location: inv_view.php?ID=$id");

//exit;
?>