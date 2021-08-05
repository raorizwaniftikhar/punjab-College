<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">	
	<h1> Edit News</h1>
		<a href="news.php">
			<div class="backBtn"></div>
		</a>
	<form action="" method="post">
		<table>
			<tr>
				<td>Title:</td>
				<td><input type="text" name="t" /></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><textarea cols="18" rows="6" name="dsp"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit-btn" value="Update News" /></td>
			</tr>
			
		</table>
	</form>
	<?php
				$newsId= $_GET['id'];
				if(isset($_POST['t']) && ($_POST['dsp']))
					{
		
				
				
					$updateNew="UPDATE news SET 
											title='".$_POST['t']."',
											Description='".$_POST['dsp']."'
							WHERE news_id=".$newsId;
							
						if(!mysql_query($updateNew))
						{
							die("could not update :".mysql_error());
						}
						
					}
			?>
<?php require_once('includes/footer.php');?>