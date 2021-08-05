<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $progId= $_GET['id'];
	  $CombId=$_GET['combId'];
		//$delStudent="DELETE FROM student WHERE prog_id='$progId'";
			$delCombination="DELETE FROM combination WHERE comb_id=".$CombId;	 
				//$delProgram="DELETE FROM program WHERE prog_id='$progId'";
				if(!mysql_query($delCombination))
					{
						die("Could not delete record ".mysql_error());
					}
				
					
				
				 header("Location: combination.php");
				 
						
						
						
				
					
	?>
</div>
<?php require_once('includes/footer.php');?>