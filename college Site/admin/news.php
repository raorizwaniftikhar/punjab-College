<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<h1>Add News</h1>
	<form action="" method="post">
	<table  cellspacing="8">
		
		<tr>
			<th>Title:</th>
			<td><input type="text" name="title"  /></td>
			
		</tr>
        <tr>
			<th>News Date:</th>
			<td><input type="text" name="date"   /></td>
            
			
		</tr>
		<tr>
			<th>News Detail:</th>
			<td><textarea cols="22" rows="6" name="des" ></textarea></td>
			
		</tr>
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add"/></td>
		</tr>
		
	</table>
	</form>
	<?php if(isset($_POST['title']) &&($_POST['des']))
			{
				$add="INSERT INTO news(title,date,Description) VALUES('$_POST[title]','$_POST[date]','$_POST[des]')";
				if(!mysql_query($add))
					{
						die("News not add :".mysql_error());
					}
			}
			
	?>
	<h1>Pervious News</h1>
	<table>
		<tr bgcolor="#666666">
			<th> Title </th>
            <th>News Date</th>
			<th>Description</th>
			<th>Action</th>
			
		</tr>
	<?php
			$newsDetail="SELECT * FROM news";
			$nResult=mysql_query($newsDetail);
			while($row=mysql_fetch_array($nResult))
				{
					$newsId=$row['news_id'];
					echo "<tr bgcolor='#eee'>";
							 echo "<td>".$row['title']."</td>";
							 echo "<td>".$row['date']."</td>";
							 echo "<td>".$row['Description']."</td>";
							 echo "<td>"."<a href='news-edit.php?id=$newsId'>Edit</a>"."||"."<a href='news-delete.php?id=$newsId'>Delete"."</a>"."</td>";
					echo"</tr>";
				}
				
				
	?>

		
		
	</table>
</div>
<?php require_once('includes/footer.php');?>
