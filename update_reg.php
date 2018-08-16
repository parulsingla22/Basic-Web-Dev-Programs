<?php
include "config.php";
$fname=$_REQUEST['name'];
$photo=$_REQUEST['photo'];
$sid=$_REQUEST['sid'];
$father=$_REQUEST['father'];
$contact=$_REQUEST['contact'];
$course=$_REQUEST['course'];
$fee=$_REQUEST['fee'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
      if(isset($_FILES['nphoto'])&&$_FILES['nphoto']['error']==0)
      {
	     $random1=time()*rand();
		 $ext=pathinfo($_FILES['nphoto']['name'],PATHINFO_EXTENSION);
		 $pic1=$random1.".".$ext;
		 $target = "student/".$pic1;
		 move_uploaded_file($_FILES['nphoto']['tmp_name'],$target);
		 		
         unlink("student/$photo");
         
	  }
	  else
	  {
	     $pic1=$_REQUEST['photo'];
	  }
}
if(updateInfo("update student set name ='$fname',father='$father',contact='$contact',photo='$pic1',course='$course',fee='$fee' where sid='$sid'"))
{
header("Location:reg_disp.php?s=success");
}
else
{
header("Location:reg_disp.php?e=error");

}
?>