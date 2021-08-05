<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
		

<div id="content">

		<?php require_once('includes/sidebar.php');?>	
			<?php
					$status = array("first"=>1, "second"=>2, "third"=>3);
					$getDate="SELECT * FROM admission where prog_id='p4'";
					$result=mysql_query($getDate) or die();
					$currentDate = strtotime(date('Y-m-d'));
					?>
                    <table  cellpadding="5" width="50%" style="border:1px solid #FFF; margin:10px;">
                    <tr>
                    	<th bgcolor="#666" colspan="2" style="border-bottom:1px solid #FFF">Merit List for B.Sc</th>
                    </tr>
                    <?php
						while($row=mysql_fetch_array($result))
						{
							if ($currentDate>=strtotime($row['date']))
							{
								?>
                                	<tr>
                                    <td align="center"><?php echo $row['list_category'];?></td>
                                    <td align="center">
                                    	<a href="bscMerit.php?list_id=<?php echo $status[$row['list_category']]?>">show list</a>
                                    </td>
                            		</tr>
                            <?php
							}
						}
						
						?>	
					</table>

<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div>
<?php require_once('includes/footer.php'); ?>