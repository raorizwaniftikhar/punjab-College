<?php require_once('connection.php');?>

<?php
		if(isset($_POST['prog']) &&($_POST['time'])&&($_POST['date']))
			{
				$add="INSERT INTO dateSheet VALUES(NULL,'$_POST[prog]','$_POST[subject]','$_POST[roomNo]','$_POST[time]','$_POST[date]')";
				if(!mysql_query($add))
					{
						die("News not add :".mysql_error());
					}
			}
			header("Location: dateSheet.php");
			
?>