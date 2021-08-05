<?php require_once('connection.php');?>

<?php
		if(isset($_POST['programId']) &&($_POST['programName']))
			{
				$add="INSERT INTO program(prog_id,prog_name,description) VALUES('$_POST[programId]','$_POST[programName]','$_POST[programDescription]')";
				if(!mysql_query($add))
					{
						die("News not add :".mysql_error());
					}
			}
			header("Location: program.php");
			
?>