<!DOCTYPE html>
<html lang="en">
	<html>
	<head>
		<meta charset="UTF-8">
    	<title>uploadfile</title>
        <!-- /*design the css to make the GUI make more comfortable -->
    	<style  type="text/css">
    		.upload2{

    			/*border: 3px solid blanchedalmond;*/
        		margin: 0px auto;
        		width: 300px;
        		height: 100px;
                /*position: absolute;
                left: 20%;*/
        		/*text-align: center;*/
    		}
    		.upload1{
                width: 420px;
                height: 40px;
    			border: 3px;
    			background-color:#3dd2dd;
                border-radius: 20px;
                box-shadow: rgba(0,0,0,0.3) 2px 3px 2px;
                font-style: italic;
                font-size: 30px;
                opacity: 0.5;
    		}
    		.upload3{
    			color: #3dd2dd;

    			color-rendering: #3dd2dd;
    			outline-color: #3dd2dd;
    			text-decoration-color: #3dd2dd;

    		}
    		.position1{
                width: 150px;
                height: 40px;
    			padding-left: 90px;

    		}
    		.position2{
                position: absolute;
                left: 32%;
    			/*padding-left: -80px;*/
    		}
    		.deleteAndView{
                width: 150px;
                height: 40px;
    			border-top: 200px;
    			/*border: 3px solid blanchedalmond;*/
        		margin: 0px auto;
        		width: 600px;
        		height: 300px;
    		}
    		.position3{
                width: 150px;
                height: 60px;
    			margin-top: 60px;
    			margin-left: 120px;
    			height: 60px;
                /*font-family: Microsoft YaHei;*/
                font-size: 50px;
    			/*padding-top: 40px;*/}
    		.position4{
                width: 420px;
                height: 40px;
    			margin-top: 60px;
    			/*margin-left: 300px;*/
    			/*padding-left: 100px;*/
    			margin-left: 80px;
                border: 5px;
                background-color:#3dd2dd;
                border-radius: 20px;
                box-shadow: rgba(0,0,0,0.3) 2px 3px 2px;
                font-style: italic;
                font-size: 30px;
                opacity: 0.5;
    		}
    		.position5{
                width: 420px;
                height: 40px;
				margin-top: 60px;
    			/*margin-left: 300px;*/
    			/*padding-left: 100px;*/
    			margin-left: 80px;
                border: 5px;
                background-color:#3dd2dd;
                border-radius: 20px;
                box-shadow: rgba(0,0,0,0.3) 2px 3px 2px;
                font-style: italic;
                font-size: 30px;
                opacity: 0.5;
    		}
            .position6{
                margin-top: 40px;

                position: absolute;
                left: 32%;

            }
            .font{
                padding-left: 80px;
                font-size:20px;
                font-style: italic;
                text-align: center;
            }

    	</style>
	</head>
<?php
session_start();
// get username from SESSION
$username = $_SESSION['username'];

if (!empty($_SESSION['username'])){
// get the full path 
$directory = sprintf("/home/qinyachen/module2gp/%s", $username);
$dh  = opendir($directory);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}
sort($files);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// make it a select label for the uploaded file, and the next php goes to openfile.php
echo '<form action = "openfile.php" method = "get" class="deleteAndView">';
echo "<label class='font'>Profiles you have:</label>".'<select name ="FILE" class="position3">';
for($i = 2; $i < sizeof($files); $i++){
	echo'<option value=',$files[$i];
	echo' class="font">',$files[$i];
	echo "</option>";
}
echo "</select>";

echo '<input type="submit" name = "open" value="open" class="position4"> <BR>';
echo '<input type ="submit" name = "delete" value="delete" class="position5"> ';

echo '</form>';
}
?>
	<body>
	<br>
	<br>
	<br>
    <!-- design the uploading file button -->
	<form enctype="multipart/form-data" action="uploaderfile.php" method="POST" class="upload2">
    	<p class="position1">
        	<input type="hidden" name="MAX_FILE_SIZE" value="20000000" class="upload1" />
        	<label for="uploadfile_input" class="upload3"></label> <input name="uploadedfile" type="file" id="uploadfile_input"  class="upload3"  />
    	</p>
    	<p class="position2">
        	<input type="submit" value="Upload File" class="upload1" >
    	</p>
	</form>
    <br>
    <br>
    <!-- design the logout button to go back to login.php(original php) -->
    <form " action="transfer.php" method="POST" class="upload2">
        <p class="position6">
            <input type="submit" name="logout" value="logout" class="upload1">
        </p>
    </form>



</body></html>
