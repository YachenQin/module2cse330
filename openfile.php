<?php

session_start();

$filename = rtrim($_GET["FILE"],"\"");
@$open=$_GET["open"];
@$delete=$_GET["delete"];

// Get the filename and make sure it is valid
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
    echo "Invalid filename";
    exit;
}

// Get the username and make sure it is valid
$username = $_SESSION["username"];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$full_path = sprintf("/home/qinyachen/module2gp/%s/%s", $username, $filename);

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);


//if the open button been clicked	
if($open=="open"){
        header("Content-Type: ".$mime);
        header(sprintf("Content-disposition: filename=\"%s\"",$filename));
        readfile($full_path);
        exit();
}

//if the delete button been clicked	
if($delete=="delete")
{
    unlink($full_path);
    header("location:upload.php");
    exit();
}


?>
