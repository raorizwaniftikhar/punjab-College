<?php require_once('connection.php');?>

<?php
		if(isset($_POST['prog']) &&($_POST['time'])&&($_POST['teacherName'])&&($_POST['date']))
			{
				$add="INSERT INTO timeTable VALUES(NULL,'$_POST[prog]','$_POST[subject]','$_POST[teacherName]','$_POST[time]','$_POST[date]','$_POST[roomNo]')";
				if(!mysql_query($add))
					{
						die("News not add :".mysql_error());
					}
			}
			header("Location: timeTable.php");
			
?>