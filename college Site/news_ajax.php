<?php 
		$title='';
		$description='';
		
		
		$getNews="SELECT *FROM news Limit 10";
		$result=mysql_query($getNews);
		while($row=mysql_fetch_array($result))
		
			{
				$title=$row['title'];
				
				
				
				
				 $description .= '<p>'.$row['Description'].'</p><br />';
				
			}
			echo $title."<br />";
			echo "<marquee  height='265px' direction='up' scrolldelay='150' >";
			echo $description;
			echo "</marquee>";

?>