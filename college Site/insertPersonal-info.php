<?php
	require_once('connection.php');
	$location='';

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "admin/upload/" . $_FILES["file"]["name"]);
      $location="upload/" . $_FILES["file"]["name"];
      }
    }
 

/////////////////////////////////////////////////////////////////////////////////////////
			$getId="SELECT (std_id) FROM student";
		$result=mysql_query($getId);
			while($row=mysql_fetch_array($result))
				{
					
						
							$getForignKey=$row['std_id'];
						
						
						
				  
				}
				
				
				
						 ++$getForignKey;

		$persInfo = "insert into student values($getForignKey, '".
									$_POST['name']."', '".
									$_POST['fname']."', '".
									$_POST['nic']."', '".
									$_POST['dob']."', '".
									$_POST['email']."', '".
									$_POST['religion']."', '".
									$_POST['distt']."', '".
									$_POST['nationality']."', '".
									$_POST['ph']."', '".
									$_POST['hafiz']."', '".
									$_POST['prog']."', '".
									$_POST['combination']."', '".
									$_POST['address']."', '".
									$location."', '".
									'0'."')";
									
		//echo '<br />'.$persInfo;
		
		

	
		mysql_query($persInfo) or die("Error inserting student info: ". mysql_error());
		
		$quer = "insert into academic values('matric', '".
											$_POST['mgroup']."', '".
											$_POST['mr']."', '".
											$_POST['mm']."', '".
											$_POST['mtm']."', '".
											$_POST['mb']."', '".
											$_POST['mg']."', '".
											$_POST['my']."', '".
											$_POST['mreg']."', '".
											$getForignKey."')";
		
		//echo '<br />'.$quer;
		mysql_query($quer) or die(mysql_error());
		
		if ($_POST['prog'] == 'p4' || $_POST['prog']=='p5')
		{									
			$quer = "insert into academic values('Intermediate', '".
											$_POST['fgroup']."', '".
											$_POST['fr']."', '".
											$_POST['fm']."', '".
											$_POST['ftm']."', '".
											$_POST['fb']."', '".
											$_POST['fg']."', '".
											$_POST['fy']."', '".
											$_POST['freg']."', '".
											$getForignKey."')";
											
		//echo '<br />'.$quer;
		mysql_query($quer) or die(mysql_error());
		}
		/*		
				$addMatric="INSERT INTO academic(per_class,per_rollNO,obtain_marks,total_marks,board,grade,year,student_std_id)
			VALUES('matric','$_POST[mr]','$_POST[mm]','$_POST[mtm]','$_POST[mb]','$_POST[mg]','$_POST[my]','$getForignKey')";
			
			if(isset($_POST['fr'])&&($_POST['fm']))
				{
					
					$addInter="INSERT INTO academic(per_class,per_rollNO,obtain_marks,total_marks,board,grade,year,student_std_id)
					VALUES('F.sc/F.A','$_POST[fr]','$_POST[fm]','$_POST[ftm]','$_POST[fb]','$_POST[fg]','$_POST[fy]','$getForignKey')";
						if(!mysql_query($addInter))
							{
								die("could not add Intermadiate record".mysql_error());
							}
				}
				

				if(!mysql_query($persInfo) || !mysql_query($addMatric))
					{
						die("could not add recod:".mysql_error());
					}
			

		*/

			header("Location: printApplicationDetail.php?id=$getForignKey");


?>