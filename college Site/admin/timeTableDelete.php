<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $timeTableId= $_GET['id'];
		$delTimeTable="DELETE FROM timeTable WHERE table_id='$timeTableId'";
			
				if(!mysql_query($delTimeTable))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: timeTable.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>