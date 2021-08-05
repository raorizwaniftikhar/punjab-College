<?php 
	
	
require_once('includes/header.php'); 

	  
	  require_once('../connection.php');
?>
<div id="content">
<?php
	@session_start();				//start session
	if (isset($_POST['name'], $_POST['pass']))		// check if login button pressed
	{
		$query = "select * from admin where uname='".$_POST['name']."' AND upass='".$_POST['pass']."'";
		$result = mysql_query($query);	
		if (mysql_num_rows($result) > 0)
		{
			// initialize session variables with username and password
			$_SESSION['adminName'] = $_POST['name'];		
			$_SESSION['adminPass'] = $_POST['pass'];
			header("Location: adminHome.php");
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
	if (!isset($_SESSION['adminName'], $_SESSION['adminPass']))	// if no one is loged in
	{
		
		require_once('loginform.php');		// display login form
		
		
	}
	else
	{
		require_once('adminHome.php');
	}
		
	?>
	

		

</div>
	
<?php require_once('includes/footer.php');?>
