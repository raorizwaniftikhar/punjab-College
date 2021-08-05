<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 echo  $teacherId= $_GET['id'];
		$delStudent="DELETE FROM teacher WHERE teacher_id='$teacherId'";
			
				if(!mysql_query($delStudent))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: faculty.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>