<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<h1>Register New Student </h1>
	<form action="" method="post">
	<table>
    	 <tr>		
    		<th>Application No: </th>
            <td><input type='text' name='applicationNo'/> </td>
        </tr>
        <tr>		
    		<th>Student Roll No: </th>
            <td><input type='text' name='rollNo'/> </td>
        </tr>
         <tr>		
    		<th>Student Name: </th>
            <td><input type='text' name='studentName'/> </td>
        </tr>
         <tr>		
    		<th>User Name: </th>
            <td><input type='text' name='userName'/> </td>
        </tr>
        <tr>
            <th>Password: </th>
       		 <td><input type='password' name='password'/> </td>
        </tr>
         <tr>		
    		<th>Session Start: </th>
            <td><input type='text' name='sessionStart'/> </td>
        </tr>
         <tr>		
    		<th>Sesstion End: </th>
            <td><input type='text' name='sessionEnd'/> </td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type='submit' value='Register'/> </td>
        </tr>
	
	</table>
	</form>
    <?php 
			if(isset($_POST['rollNo']) and($_POST['applicationNo']))
				{
					$query="INSERT INTO registration 					
							VALUES($_POST[rollNo],'$_POST[applicationNo]','$_POST[studentName]','$_POST[userName]','$_POST[password]','$_POST[sessionStart]','$_POST[sessionEnd]')";
						$result=mysql_query($query);
							if(!$result)
								{
									die("Could not insert record".mysql_error());
								}
						$emailId='';		
						$applicationNo=$_POST['applicationNo'];		
						$getEmail="SELECT * FROM student
									WHERE std_id='$applicationNo'";
						$result=mysql_query($getEmail);
							while($row=mysql_fetch_array($result))
								{
									$emailId= $row['std_email_Id'];
								}
						$rollNo=$_POST['rollNo'];
						$userName=$_POST['userName'];
						$password=$_POST['password'];
						///////////////////////////////////////Email Sending //////////////////////////////////////
							$to=$emailId;
							$subject="Registration Detail";
							echo $message="<h3>Registration Detail</h3>
											<p>Student Roll No is:$rollNo</p>
											<p>User Name is:$userName</p>
											<p>Password is:$password</p>";
							$from="dilshad_838@yahoo.com";
							mail($to,$subject,$message,$from);
							echo "Mail Sent.";
						
				}
	
	 ?>
  
	

		
		

</div>
<?php require_once('includes/footer.php');?>
