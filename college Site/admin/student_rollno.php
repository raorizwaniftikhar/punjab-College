<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<h1>Register New Student </h1>
	<form action="" method="post">
	<table >
    <?php 
			if(isset($_POST['applicationNO']))
			{
			$_SESSION['application']=$_POST['applicationNO'];
			
			$applicationNo= $_POST['applicationNO']; 
			$query="SELECT * FROM student
					WHERE std_id=".$applicationNo;
				$result=mysql_query($query);
					
					if(mysql_num_rows($result)==1)
						{
							header("location:student_roll_NO.php");
						}
					else
						{
						echo "<h2>Record Not Found</h2>";
						}
			}		
			
							
	
	
	?>
		
	</table>
	</form>
	

		
		

</div>
<?php require_once('includes/footer.php');?>
