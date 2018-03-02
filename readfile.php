<?php
session_start();
$h = fopen("/srv/user.txt", "r");
$username=$_GET["User"];
$usernum=0;




while( !feof($h) ){
    $target=trim(fgets($h));
    
//     if the file can't reached
    if(empty($target)){
        echo"no file been read";
        break;
    }
    
//     if the user name is empty
    if (empty($username)){
        echo "none username";
        break;
    }

//    if the user name matched
    if($target==$username){
        $_SESSION["username"]=$target;
        header( "location:upload.php" );
        break;
    }

    else{
        $usernum=$usernum+1;
    }
}

//if the username doesn't match any line in user.txt file
if($usernum==3){
    echo"invalid username,please wait...";
    header("refresh:3,url=login.php");
}

fclose($h);
?>