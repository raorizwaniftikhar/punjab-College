<?php require_once('connection.php'); ?>


<?php
	@session_start();				//start session
	if (isset($_POST['uname'], $_POST['password']))		// check if login button pressed
	{
		$query = "select * from registration where login_name='".$_POST['uname']."' AND password='".$_POST['password']."'";
		$result = mysql_query($query);	
		if (mysql_num_rows($result) > 0)
		{
			// initialize session variables with username and password
			$_SESSION['userName'] = $_POST['uname'];		
			$_SESSION['userPassword'] = $_POST['password'];
			header("Location: student.php");
			
		}else
		
		{
		?>	
			<div id='invalid-user'>
		<?php	echo "Invalid user name password";	// if invalid user name password is entered
			//unset($_POST['name'],$_POST['pass']);
			
		}
		?>
		</div>
		<?php
	}
	if (!isset($_SESSION['userName'], $_SESSION['userPassword']))	// if no one is loged in
	{
		
		require_once('index.php');		// display login form
		
		
	}
	else
	{
		require_once('index.php');
	}
		
	?>