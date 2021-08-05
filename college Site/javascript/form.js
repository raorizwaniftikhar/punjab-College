// JavaScript Document



function academicForm()
{
		
	
	var board=['D.G.Khan','Multan','Bahwalpur','Sahiwall','Lahore','Gujranwala','Gujraat'];
	

	var content = document.getElementById('aForm');
	var slect = document.getElementById('course').value;
	var form = "<table>";
		
		form += "<tr><td></td><td><h1>Academic Information</h1></td></tr>";	
		form += "<tr><td></td><td>Arts:<input type='radio' name='mgroup' value='Arts'  checked='checked' />";
		form += "Science:<input type='radio' name='mgroup' value='Science' /></td></tr>";
		form += "<tr><td>Matric Roll No:</td><td><input type='text' name='mr' id='smr'/></td></tr>";
		form += "<tr><td>Matric Registration #:</td><td><input type='text' name='mreg' id='smr'/></td></tr>";
		form += "<tr><td>Obtained Marks:</td><td><input type='text' name='mm'/></td></tr>";
		form += "<tr><td>Total Marks:</td><td><input type='text' name='mtm'/></td></tr>";
		form += "<tr><td>Pass Board:</td><td>";
		form += "<select name='mb' >";
		form += "<option value=''>Select pass board</option>";
		for (var i=0 ; i < board.length-1; i++)
			form += "<option value='"+board[i]+"'> "+board[i]+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td>Pass year:</td><td>";
		form += "	<select name='my' >";
			
		form += "	<option value=''> select pass year</option>";
			for(var y=2001; y<=2020; y++)
		form += "	<option value='"+y+"'>"+y+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td>Division:</td><td>";
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
		
		
		form += "<tr><td></td><td>Arts:<input type='radio' name='fgroup' value='Arts'  checked='checked' />";
		form += "Science:<input type='radio' name='fgroup' value='Science' /></td></tr>";
		
		form += "<tr><td>Intermadiate Roll No:</td><td><input type='text' name='fr'/></td><td> <div id='aMarkMsg'></div></td></tr>";
		form += "<tr><td>Intermadiate Registration #:</td><td><input type='text' name='freg' id='smr'/></td></tr>";
		form += "<tr><td>Obtained Marks:</td><td><input type='text' name='fm'/></td></tr>";
		form += "<tr><td>Total Marks:</td><td><input type='text' name='ftm'/></td></tr>";
		form += "<tr><td>Pass Board:</td><td>";
		form += "<select name='fb' >";
		form += "<option value=''>Select pass board</option>";
		for (var i=0 ; i < board.length-1; i++)
			form += "<option value='"+board[i]+"'> "+board[i]+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td>Pass year:</td><td>";
		form += "	<select name='fy' >";
			
		form += "	<option value=''> select pass year</option>";
			for(var y=2001; y<=2020; y++)
		form += "	<option value='"+y+"'>"+y+"</option>";
		form += "	</select>";
		form += "</td></tr>";
		form += "<tr><td>Division:</td><td>";
		form += "	<select name='fg' >";
		form += "	<option value=''> select Division</option>";
		form += "	<option value='1st'>1st Division</option>";
		form += "	<option value='2nd'>2nd Division</option>";
		form += "	<option value='3rd'>3rd Division</option>";
		form += "	</select>";
		form += "</td></tr>";
	}
	form +="<tr><td></td><td><input type='submit' value='Submit' /></td></tr>";
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
				
					comb += "<select name='combination'  >";
					comb += "	<option value=''> select Combination</option>";
					comb += "	<option value='1'>Physcics,Chemistry,Biology</option>";
					comb += "	<option value='2'>Physics,Chemistry,Math</option>";
					
					comb += "	</select>";
					
				}
		if(slect=='p2')
			{
				comb = "	<select name='combination' >";
				comb += "	<option value=''> select Combination</option>";
				comb += "	<option value='3'>Islamiyat,History,Education</option>";
				comb += "	<option value='4'>Islamiyat,History,Arbi</option>";
				
				comb += "	</select>";
							
			}
		 if(slect=='p3')
			{
				comb = "	<select name='combination' >";
				comb += "	<option value=''> select Combination</option>";
				comb += "	<option value='5'>Physics,Math,Computer</option>";
				comb += "	<option value='6'>Economics,Math,Computer</option>";
				
				comb += "	</select>";
							
			}
		if(slect=='p4')
			{
				
				comb = "	<select name='combination' >";
				comb += "	<option value=''> select Combination</option>";
				comb += "	<option value='7'>Physics,Math,Computer</option>";
				comb += "	<option value='8'>Economics,Math,Computer</option>";
				comb += "	<option value='9'>Economics,Sataticstics,Computer</option>";
				comb += "	<option value='10'>Math A,Math B,Computer</option>";
				comb += "	<option value='11'>Economics,Math,Computer</option>";
				
				comb += "	</select>";
				
							
			}
			if(slect=='p5')
			{
				
				comb = "	<select name='combination' >";
				comb += "	<option value=''> select Combination</option>";
				comb += "	<option value='12'>Isamiyat,Economics,Arbi</option>";
				comb += "	<option value='13'>Economics,Arbi,Sociology</option>";
				
				
				comb += "	</select>";
				
			}
		
			
			groupContent.innerHTML=comb;
			
	}
