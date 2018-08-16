<?php
include "config.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
       echo "server";
      if(isset($_FILES['student'])&&($_FILES['student']['error']==0))
    {
	      echo "in the file";
          $random1=time()*rand();
          $ext=pathinfo($_FILES['student']['name'],PATHINFO_EXTENSION);
           $pic1=$random1.".".$ext;
	       $target="student/".$pic1;
	 
	  if(move_uploaded_file($_FILES['student']['tmp_name'],$target/*"img/".$_FILES['photo']['name']*/))
	     {
	        echo "success";
	      }
	       else
	       {
	          echo "problem";
	        }
}}
else
{
echo "server problem";
}
?>