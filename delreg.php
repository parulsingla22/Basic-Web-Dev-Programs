<?php
include "config.php";
$sid=$_REQUEST['username'];
$result=selectRecord("select photo from student where $sid");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		
if(!unlink("student/$row[photo]"))
{
 echo "Deleted unsuccess";
}
else
{
	echo "success";
}
}}
if(updateInfo("delete from student where sid='$sid'"))
	header("Location:reg_disp.php?s=deleted");
else
	header("Location:reg_disp.php?e=Error");
?>