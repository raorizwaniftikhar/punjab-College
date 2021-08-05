<?php require_once('connection.php');?>

<?php
		if(isset($_POST['rollNo'])&&($_POST['subject'])&&($_POST['obtainMarks'])&&($_POST['totalMarks']))
			{
				$add="INSERT INTO result VALUES(NULL,'$_POST[rollNo]','$_POST[subject]','$_POST[obtainMarks]','$_POST[totalMarks]')";
				if(!mysql_query($add))
					{
						die("Record not insert :".mysql_error());
					}
			}
			header("Location: result.php");
			
?>