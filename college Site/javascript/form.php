

<?php require_once('connection.php'); ?>

<script language="javascript">
function academicForm()
{

		
	
	var board=['D.G.Khan','Multan','Bahwalpur','Sahiwall','Lahore','Gujranwala','Gujraat'];
	

	var content = document.getElementById('aForm');
	var slect = document.getElementById('course').value;
	var form = "<center><h2>Academic Information</h2></center>";
		
		form += "<table  cellspacing='7'>";
		form+="<tr><td><h3>Matric Record</h3></td></tr>";	
		form += "<tr><td></td><td>Arts:<input type='radio' name='mgroup' value='Arts'  checked='checked' />";
		form += "Science:<input type='radio' name='mgroup' value='Science' /></td></tr>";
		form += "<tr><td><label> Roll No:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='mr' id='smr'/></td>";
		form += "<td><label>Registration #:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='mreg' id='smr'/></td></tr>";
		form += "<tr><td><label>Obtained Marks:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='mm'/></td>";
		form += "<td><label>Total Marks:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='mtm'/></td></tr>";
		form += "<tr><td><label>Matric Board:</label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "<select name='mb' >";
		form += "<option value=''>Select pass board</option>";
		for (var i=0 ; i < board.length-1; i++)
			form += "<option value='"+board[i]+"'> "+board[i]+"</option>";
		form += "	</select>";
		form += "</td>";
		form += "<td><label>Pass year:</label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "	<select name='my' >";
			
		form += "	<option value=''> select pass year</option>";
			for(var y=2001; y<=2020; y++)
		form += "	<option value='"+y+"'>"+y+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td><label>Division:</label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "	<select name='mg' >";
		form += "	<option value=''> select Division</option>";
		form += "	<option value='1st'>1st Division</option>";
		form += "	<option value='2nd'>2nd Division</option>";
		form += "	<option value='3rd'>3rd Division</option>";
		form += "	</select>";
		form += "</td></tr>";
		
		
		
		form+="<br />";
		
	
	if(slect=='p4' || slect=='p5')
	{
		
		form+="<tr><td><h3>Intermadiate Record</h3></td></tr>";
		form += "<tr><td></td><td>Arts:<input type='radio' name='fgroup' value='Arts'  checked='checked' />";
		form += "Science:<input type='radio' name='fgroup' value='Science' /></td></tr>";
		
		form += "<tr><td><label>Roll No:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='fr'/></td>";
		form += "<td><label> Registration #:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='freg' id='smr'/></td></tr>";
		form += "<tr><td><label>Obtained Marks:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='fm'/></td>";
		form += "<td><label>Total Marks:</label></td><td><span style='color:#F00;float:left'>*</span><input type='text' name='ftm'/></td></tr>";
		form += "<tr><td><label>Pass Board:</label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "<select name='fb' >";
		form += "<option value=''>Select pass board</option>";
		for (var i=0 ; i < board.length-1; i++)
			form += "<option value='"+board[i]+"'> "+board[i]+"</option>";
		form += "	</select>";
		form += "</td>";
		form += "<td><label>Pass year:<label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "	<select name='fy' >";
			
		form += "	<option value=''> select pass year</option>";
			for(var y=2001; y<=2020; y++)
		form += "	<option value='"+y+"'>"+y+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td><label>Division:</label></td><td><span style='color:#F00;float:left'>*</span>";
		form += "	<select name='fg' >";
		form += "	<option value=''> select Division</option>";
		form += "	<option value='1st'>1st Division</option>";
		form += "	<option value='2nd'>2nd Division</option>";
		form += "	<option value='3rd'>3rd Division</option>";
		form += "	</select>";
		form += "</td></tr>";
	}
	form +="<tr><td></td><td></td><td></td><td align='right'><input type='submit' value='Submit' /></td></tr>";
	form += "</table>";
	content.innerHTML = form;
	
	group();
	

}

	function group()
	{
		var groupContent=document.getElementById('group');
		var slect = document.getElementById('course').value;
			
			if(slect=='p1')
				{
				var	comb="";
				<?php
					$sub="";
					 $query="select * from combination where prog_id='p1'";
					 $result=mysql_query($query);
 

 				?>
					
					
					comb += "<select name='combination'>";
					
					comb += "<option value=''> select Combination</option>";
					<?php
					while($row=mysql_fetch_assoc($result))
				 {
				   $sub1=$row['subject1'];
				   $sub2=$row['subject2'];
				   $sub3=$row['subject3'];
				   ?>
				    comb += "	<option value='2'><?php echo $sub1.','.$sub2.','.$sub3; ?></option>";
					
					<?php
				 }
                ?>
					
					comb += "</select>";
					
				}
		if(slect=='p2')
			{
				<?php
					$sub="";
					 $query="select * from combination where prog_id='p2'";
					 $result=mysql_query($query);
 

 				?>
				
				comb = "<select name='combination' >";
				comb += "<option value=''> select Combination</option>";
				<?php
					while($row=mysql_fetch_assoc($result))
				 {
				   $sub1=$row['subject1'];
				   $sub2=$row['subject2'];
				   $sub3=$row['subject3'];
				   ?>
				 comb += "<option value='2'><?php echo $sub1.','.$sub2.','.$sub3; ?></option>";
					
					<?php
				 }
                ?>
				comb += "	</select>";
							
			}
		 if(slect=='p3')
			{
				<?php
					$sub="";
					 $query="select * from combination where prog_id='p3'";
					 $result=mysql_query($query);
 

 				?>
				comb = "<select name='combination' >";
				comb += "<option value=''> select Combination</option>";
				<?php
					while($row=mysql_fetch_assoc($result))
				 {
				   $sub1=$row['subject1'];
				   $sub2=$row['subject2'];
				   $sub3=$row['subject3'];
				   ?>
				 comb += "<option value='2'><?php echo $sub1.','.$sub2.','.$sub3; ?></option>";
					
					<?php
				 }
                ?>
				
				comb += "</select>";
							
			}
		if(slect=='p4')
			{
				
				<?php
					$sub="";
					 $query="select * from combination where prog_id='p4'";
					 $result=mysql_query($query);
 

 				?>
				comb = "<select name='combination' >";
				comb += "<option value=''> select Combination</option>";
				<?php
					while($row=mysql_fetch_assoc($result))
				 {
				   $sub1=$row['subject1'];
				   $sub2=$row['subject2'];
				   $sub3=$row['subject3'];
				   ?>
				 comb += "<option value='2'><?php echo $sub1.','.$sub2.','.$sub3; ?></option>";
					
					<?php
				 }
                ?>
				
				comb += "</select>";
				
							
			}
			if(slect=='p5')
			{
				
				<?php
					$sub="";
					 $query="select * from combination where prog_id='p5'";
					 $result=mysql_query($query);
 

 				?>
				comb = "<select name='combination' >";
				comb += "<option value=''> select Combination</option>";
				<?php
					while($row=mysql_fetch_assoc($result))
				 {
				   $sub1=$row['subject1'];
				   $sub2=$row['subject2'];
				   $sub3=$row['subject3'];
				   ?>
				 comb += "<option value='2'><?php echo $sub1.','.$sub2.','.$sub3; ?></option>";
					
					<?php
				 }
                ?>
				
				comb += "</select>";
				
			}
		
			
			groupContent.innerHTML=comb;
			
	}
	
</script>