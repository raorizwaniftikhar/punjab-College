<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $progId= $_GET['id'];
		$delStudent="DELETE FROM student WHERE prog_id='$progId'";
			$delCombination="DELETE FROM combination WHERE prog_id='$progId'";	 
				$delProgram="DELETE FROM program WHERE prog_id='$progId'";
				if(!mysql_query($delCombination)||!mysql_query($delStudent)||!mysql_query($delProgram))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: program.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>