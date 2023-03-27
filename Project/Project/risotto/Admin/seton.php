
<?php session_start(); include("config.php");
ob_start();

$status= $_REQUEST['status'];
if($status=="true")
{echo "All Tables Are Full";
}
else{
echo "Tables Are Available";
}
	mysqli_query($db,"update login set status='$status'");	
?>
