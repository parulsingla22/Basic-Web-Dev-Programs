<form action="insert1.php" method="post">
<input type="file"  name='student' />
			
	<input type="submit" value="Regsiter">
	<span style="color:green"><?php if(isset($_GET['s'])) echo $_GET['s'] ?></span>
	<span style="color:red"><?php if(isset($_GET['e'])) echo $_GET['e'] ?></span>
</form>