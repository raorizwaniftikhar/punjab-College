<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $appId=$_GET['id'] ;
		$delPersonal="DELETE FROM student WHERE std_id=".$appId;
		$delAcademic="DELETE FROM academic WHERE std_id=".$appId;
		 if(mysql_query($delAcademic)&& mysql_query($delPersonal))
		 	header("Location: applicants.php");
			else
				die( "error".mysql_error());
			
	?>
</div>
<?php require_once('includes/footer.php');?>