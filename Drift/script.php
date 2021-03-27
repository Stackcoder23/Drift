<?php 

$location='upload/original';
$temp = $_FILES['file']['tmp_name'];

if(move_uploaded_file($temp,$location.'/'.$_FILES['file']['name']))
{
	echo 1;
}
else{
	echo 0;
}
?>


