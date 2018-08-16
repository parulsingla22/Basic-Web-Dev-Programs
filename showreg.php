<html>
	<head>
	<style>
		.mydesign
		{
			background-color:rgb(168,219,49);
			padding:40px;
		}
		.mydesign .textbox span
		{
			color:red;
			display:none;
		}
		.mydesign .textbox input[type='text'],.textbox select
		{
			display:block;
			width:100%;
			height:50px;
		}
		.mydesign .common
		{
			line-height:30px;
			margin:10px;
		}
		.mydesign .textbox label
		{
				color:white;
		}
		.mydesign .textbox input[type='submit']
		{
			display:block;
			text-align:center;
			width:100%;
			height:50px;
			background-color:rgb(113,194,73);
			color:white;
		}
	</style>
		<script type="text/javascript" src="js2/jquery-3.3.1.min.js">
		</script>
		<script>
			$(document).ready(function(){
				$(":submit").click(function(){
					var error=0;
					if($("#name").val().length==0)
					{
						$("#name").css("border","1px solid red");
						$("#ename").show();
						error++;
					}
					else
					{
						$("#name").css("border","none");
						$("#ename").hide();
					}
					if($("#father").val().length==0)
					{
						$("#father").css("border","1px solid red");
						$("#efather").show();
						error++;
					}
					else
					{
						$("#father").css("border","none");
						$("#efather").hide();
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
		<form action="update_reg.php" method="post" enctype="multipart/form-data">
		<div class ="textbox">
			<label for="fname" class="common">Enter sid</label>
			<input  readonly type="text" id="fname" name="sid" class="common" value="<?php echo $_GET['sid']?>"><br/>
			<span id="efname" class="common">Please Enter sid</span>
		</div>
		<div class ="textbox">
			<label for="fname" class="common">Enter name</label>
			<input type="text" id="fname" name="name" class="common" value="<?php echo $_GET['name']?>"><br/>
			<span id="efname" class="common">Please Enter Name</span>
		</div>
       <div class ="textbox">
			<label for="lname" class="common">Enter Father name</label>
			<input type="text" id="fname" name="father" class="common" value="<?php echo $_GET['father']?>"><br/>
			<span id="elname" class="common">Please Enter Father's Name</span>
		</div>
		
        <div class ="textbox">
			
			<input type="hidden" id="student" name="photo" class="common" value="<?php echo $_GET['photo']?>"/><br/>
			
			<img src="student/<?php echo $_GET['photo']; ?>" height="200" width="200"
			</div>
			
			
			<label for="student" class="common">Upload your photo</label>
			<input type="file" id="student" name="nphoto" class="common"/>
			<span id="estudent" class="common">Please upload photo</span>
		</div>
		
        <div class ="textbox">
			<label for="cont" class="common">Enter contact</label>
			<input type="text" id="cont" name="contact" class="common" value="<?php echo $_GET['contact']?>"><br/>
			<span id="econt" class="common">Please Enter Contact</span>
		</div>
        <div class ="textbox">
			<label for="course" class="common">Enter Course</label>
			<input type="text" id="fname" name="course" class="common" value="<?php echo $_GET['course']?>"><br/>
			<span id="ecourse" class="common">Please Enter Course</span>
		</div>
        <div class ="textbox">
			<label for="fee" class="common">Enter fee</label>
			<input type="text" id="fname" name="fee" class="common" value="<?php echo $_GET['fee']?>"><br/>
			<span id="efee" class="common">Please Enter fee</span>
		</div>

	 <input type="submit" value="update">
	 </form>