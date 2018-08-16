<html>
<head>
<style type="text/css">
body
{
background-color:white;
color:skyblue;
}
div
{
border:1px;
margin:1px;
width:100%;
background-color:skyblue;
height:50px;
color:red;
font-weight:bold;
text-align:center;
font-size:30px;

}
h1
{
font-weight:bold;
font-size:50px;
color:pink;
}
table
{
width:100%;
border:4px solid skyblue;

}
th{
color:pink;
font-size:40px;
}
td{
color:black;
font-size:20px;
text-align:center;
}
</style>

</head>

<?php
include "config.php";
?><body>

<div>PR3 TRAINING INSTITUTE</div>
<table border="1">
<caption><h1>STUDENT</h1>
<tr>
<th>Photo</th>
<th>sid</th>
<th>Name</th>
<th>Father's Name</th>
<th>Contact</th>
<th>Photo</th>
<th>Course</th>
<th>Fee</th>
</tr>
<?php
$result=selectRecord("select * from student");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><img src="student/<?php echo $row['photo']; ?>" height="200" width="200"></td>
			<td><?php echo $row['sid']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['father']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['photo']; ?></td>
			<td><?php echo $row['course']; ?></td>
			<td><?php echo $row['fee']; ?></td>
			
			<td>
				<form action="delreg.php" method="get">
				<input type="hidden" name="username" value="<?php echo $row['sid'] ?>">
				<input type="submit" value="Delete"/>
				</form>
				</td>
			<td>
			<form action="showreg.php" method="get">
				<input type="hidden" name="sid" value="<?php echo $row['sid']?>">
				
				<input type="hidden" name="name" value="<?php echo $row['name']?>">
				<input type="hidden" name="father" value="<?php echo $row['father']?>">
				<input type="hidden" name="photo" value="<?php echo $row['photo']?>">
				
				<input type="hidden" name="contact" value="<?php echo $row['contact']?>">
				<input type="hidden" name="course" value="<?php echo $row['course']?>">
				<input type="hidden" name="fee" value="<?php echo $row['fee']?>">
				
				<input type="submit" value="update"/>				
			
				</form>
		
			</td>
		</tr>
		<span style="color:green"><?php if(isset($_GET['s']))
		
		echo $_GET['s'];?></span>
		
		<span style="color:red"><?php if(isset($_GET['e']))
		
		echo $_GET['e'];?></span>
		
		<?php		
	}
}
else
{
	echo "No Record Exists";
}
?>

</table>

	
