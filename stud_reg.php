<?php include "header.php"; ?>
<html>
	<head>
	<style>
		.mydesign
		{
			background-color:skyblue;
			padding:40px;
		}
		.mydesign .heading
		{
		display:block;
			width:100%;
			height:100px;
			text-align:center;
			font-size:80px;
			background-color:white;
		}
		.mydesign .textbox span
		{
			color:red;
			display:none;
		}
		.mydesign .textbox input[type='text'],.textbox select,input[type='file']
		{
			display:block;
			width:100%;
			height:50px;
		}
		.mydesign .common
		{
			line-height:60px;
			margin:10px;
		}
		.mydesign .textbox label
		{
				color:white;
				font-size:30px;
		}
		.mydesign .textbox input[type='submit']
		{
			display:block;
			text-align:center;
			width:100%;
			height:50px;
			background-color:rgb(113,194,73);
			color:white;
			font-size:25px;
		}
	</style>
		<script type="text/javascript" src="js2/jquery-3.3.1.min.js">
		</script>
		
		<script>
			$(document).ready(function(){
				$(":submit").click(function(){
					var error=0;
					if($("#fname").val().length==0)
					{
						$("#fname").css("border","1px solid red");
						$("#efname").show();
						error++;
					}
					else
					{
						$("#fname").css("border","none");
						$("#efname").hide();
					}
					if($("#lname").val().length==0)
					{
						$("#lname").css("border","1px solid red");
						$("#elname").show();
						error++;
					}
					else
					{
						$("#lname").css("border","none");
						$("#elname").hide();
					}
					if($("#cont").val().length==0)
					{
						$("#cont").css("border","1px solid red");
						$("#econt").show();
						error++;
					}
					else
					{
						$("#cont").css("border","none");
						$("#econt").hide();
					}
					
					if($("#course").val().length==0)
					{
						$("#course").css("border","1px solid red");
						$("#ecourse").show();
						error++;
					}
					else
					{
						$("#course").css("border","none");
						$("#ecourse").hide();
					}
					if($("#fee").val().length==0)
					{
						$("#fee").css("border","1px solid red");
						$("#efee").show();
						error++;
					}
					else
					{
						$("#fee").css("border","none");
						$("#efee").hide();
					}
					if($("#student").val().length==0)
					{
						$("#student").css("border","1px solid red");
						$("#estudent").show();
						error++;
					}
					else
					{
						$("#student").css("border","none");
						$("#estudent").hide();
					}
					
					if(error!=0)	return false;
				});
			});
		</script>
	</head>
	<body>
	<div class="mydesign">
		<a href="reg_disp.php">show register</a>
		<form action="insert.php" method="post" enctype="multipart/form-data">
		<div class="heading">REGISTERATION FORM</div>
		<div class ="textbox">
			<label for="fname" class="common">Enter Your name</label>
			<input type="text" id="fname" name="fname" class="common"/>
			<span id="efname" class="common">Please Enter Name</span>
		</div>
		
		<div class ="textbox">
			<label for="lname" class="common">Enter Father Name</label>
			<input type="text" id="lname" name="lname" class="common"/>
			<span id="elname" class="common">Please Enter Father Name</span>
		</div>
		
		<div class ="textbox">
			<label for="cont" class="common">Enter Contact No.</label>
			<input type="text" id="cont" name="cont" class="common"/>
			<span id="econt" class="common">Please Enter your contact</span>
		</div>
		
		<div class ="textbox">
			<label for="student" class="common">Upload your photo</label>
			<input type="file" id="student" name="student" class="common"/>
			<span id="estudent" class="common">Please upload photo</span>
		</div>
		
		<div class ="textbox">
			<label for="course" class="common">Select a Course</label>
			<select id="course" name="course" class="common">
				<option value="">Please Select a Course</option>
				                 <option value="C">C</option>
								<option value="C++">C++</option>
								<option value="J2SE">J2SE</option>
								<option value="PHP">PHP</option>
								<option value="ASP.Net">ASP.Net</option>
						        <option value="CSharp.net">CSharp.net</option>
			</select>
			<span id="ecourse" class="common">Please Select a Course</span>
		</div>
		<div class ="textbox">
			<label for="fee" class="common">Enter Fee</label>
			<input type="text" id="fee" name="fee" class="common"/>
			<span id="efee" class="common">Please Enter course fee</span>
		</div>
		<span style="color:green"><?php if(isset($_GET['s'])) echo $_GET['s'] ?></span>
	<span style="color:red"><?php if(isset($_GET['e'])) echo $_GET['e'] ?></span>

		<div class="textbox">
			<input type="submit" value="Click Me" class="common"/>
		</div>
		</form>
	</div>
	</body>
</html>
<?php include "footer.php"?>