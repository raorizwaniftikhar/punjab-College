<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $dateSheetId= $_GET['id'];
		$delDateSheet="DELETE FROM dateSheet WHERE sheet_id='$dateSheetId'";
			
				if(!mysql_query($delDateSheet))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: dateSheet.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>