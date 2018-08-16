<?php
$con=mysqli_connect("localhost","root","","pr1");
if(!$con)
{
	die("Error".mysqli_connect_error($con));
}


function updateInfo($query)
{
	global $con;
	if(mysqli_query($con,$query))
		return 1;
	else
		return 0;
}
function selectRecord($query)
{
	global $con;
	$result=mysqli_query($con,$query);
	return $result;
}
?>