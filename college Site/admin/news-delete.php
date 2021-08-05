<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">
	<?php	
	 $newsId= $_GET['id'];
		$delNews="DELETE FROM news WHERE news_id=".$newsId;
		 if(mysql_query($delNews))
		 	header("Location: news.php");
			
	?>
</div>
<?php require_once('includes/footer.php');?>
