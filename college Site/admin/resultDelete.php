<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $resultId= $_GET['id'];
		$delResult="DELETE FROM result WHERE results_id='$resultId'";
			
				if(!mysql_query($delResult))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: result.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>