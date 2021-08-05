// JavaScript Document
function combinationForm()
		{
					
			var combinationId=document.getElementById('combinationId').value;
			var subject1=document.getElementById('subject1').value;
			var subject2=document.getElementById('subject2').value;
			var subject3=document.getElementById('subject3').value;
			var programId=document.getElementById('programId').value;
			
				if(combinationId=="")
					{
						document.getElementById('aCombinationIdMsg').innerHTML="<span style='color:#ff0000'>Please Enter Combination Id</span>";
						document.getElementById('combinationId').focus();
						return false;
					}
				else if(subject1=="")
					{
						document.getElementById('aSubject1Msg').innerHTML="<span style='color:#ff0000'>Please Enter Subject</span>";
						document.getElementById('subject1').focus();
						return false;
					}
				
				else if(subject2=="")
					{
						document.getElementById('aSubject2Msg').innerHTML="<span style='color:#ff0000'>Please Enter Subject</span>";
						document.getElementById('subject2').focus();
						return false;
					}
				
				else if(subject3=="")
					{
						document.getElementById('aSubject3Msg').innerHTML="<span style='color:#ff0000'>Please Enter Subject</span>";
						document.getElementById('subject3').focus();
						return false;
					}
				else if(programId=="")
					{
						document.getElementById('aProgIdMsg').innerHTML="<span style='color:#ff0000'>Please Enter Program Id</span>";
						document.getElementById('programId').focus();
						return false;
					}
				
					return true;
		
		}
		