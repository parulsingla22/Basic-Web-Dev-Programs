<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
      if(isset($_FILES['student'])&&$_FILES['student']['error']==0)
    {
         $allowed=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
		     $Filename=$_FILES["student"]["name"];
		     $Filetype=$_FILES["student"]["type"];
		     $Filesize=$_FILES["student"]["size"];
		     $ext=pathinfo($Filename,PATHINFO_EXTENSION);
             if(!array_key_exists($ext,$allowed))
			     {
				 die("Error:please select a valid file format");
				 }
		      $maxsize=5*1024*1024;
		     if($Filesize>$maxsize)
					 {
					 die("Error:please select a valid file size");
					 }
			 if(in_array($Filetype,$allowed))
             {
			    // if(file_exists("student/".$_FILES["student"]["name"]))
				 {
					  $random1=time()*rand();
                      $ext=pathinfo($_FILES['student']['name'],PATHINFO_EXTENSION);
                      $pic1=$random1.".".$ext;
	                  $target="student/".$pic1;
	                  move_uploaded_file($_FILES['student']['tmp_name'],$target);
	                 	header("Location:showreg.php?s=$pic1");

				 }
				/* else
				 {
				     move_uploaded_file($_FILES['student']['tmp_name'],"student/".$_FILES['student']['name']);
					 echo "upload success";
		      	 }*/
             }			 
     }    
     else
    {
     echo "Problem in upload";
    }
}	
else
    {
     echo "Error:".$_FILES['student']['error'];
    }
	?>
