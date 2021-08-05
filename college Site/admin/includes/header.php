<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Punjab College ShujaAbad</title>
<script type="text/javascript" language="javascript">
function verifyAdminForm()
{
	var name = document.getElementById('aName').value;
	var pass = document.getElementById('aPass').value;
	
	if (name=="")
	{
		document.getElementById('aFormMsg').innerHTML = "<span style='color:#F00'>Please enter name</span>";
		document.getElementById('aName').focus();
		return false;
	}else if (pass=="")
	{
		document.getElementById('aFormMsg').innerHTML = "<span style='color:#F00'>Please enter password</span>";
		document.getElementById('aPass').focus();
		return false;
	}
	return true;
	
}
</script>
</head>

<body>
	<div id="wrapper">
			<div id="header">
			
			
				<div id="Title-bg">
					<h2>Punjab College ShujaAbad</h2>
				</div>
					
		<?php session_start(); 
			if (isset($_POST['logout']))	// check if logout button pressed
			{
				unset($_SESSION['adminName'], $_SESSION['adminPass']);
				session_destroy();		//destroy seesion
			}
			if (isset($_SESSION['adminName'])):
		?>
				<?php require_once('nav.php'); ?>
				
			<?php endif;?>
						
		</div><!--end header-->
