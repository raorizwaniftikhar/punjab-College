<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<h1>Register New Student </h1>
	<form action="" method="post">
	<table >
    <tr>
    <?php	if(isset($_SESSION['application']))
   			$std_id= $_SESSION['application'];
	?>
								<th>	User Name: </th>
								<td><input type='text' name='rollNo'/> </td>
							</tr>
							<tr>
								<th>Password: </th>
							<td><input type='text' name='password'/> </td>
							</tr>
							<tr>
								<td></td>
								<td><input type='submit' value='Register'/> </td>
							</tr>
	
	</table>
	</form>
    <?php 
			if(isset($_POST['rollNo']))
				{
					$query="INSERT INTO std_registration 					
							VALUES($std_id,'$_POST[rollNo]','$_POST[password]')";
						$result=mysql_query($query);
							if(!$result)
								{
									echo "Record Not Found";
								}
				}
	
	 ?>
	

		
		

</div>
<?php require_once('includes/footer.php');?>
