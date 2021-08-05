// JavaScript Document

	function admissionForm()
		{
			var programName=document.getElementById('program').value;
			var seats=document.getElementById('totalseats').value;
			var admissionDate=document.getElementById('lastDate').value;
			var firstList=document.getElementById('firstList').value;
			var secondList=document.getElementById('secondList').value;
			var thirdList=document.getElementById('thirdList').value;
			
			
				if(programName=="" || programName=='Choose one program')
					{
						document.getElementById('aProgMsg').innerHTML="<span style='color:#ff0000'>Please slect program</span>";
						document.getElementById('program').focus();
						return false;
					}
				else if(seats=="")
					{
						document.getElementById('aSeatsMsg').innerHTML="<span style='color:#ff0000'>Please Enter Number of seats</span>";
						document.getElementById('totalseats').focus();
						return false;
					}
				else if(admissionDate=="" ||admissionDate=='yyyy/mm/dd')
					{
						document.getElementById('aLastDateMsg').innerHTML="<span style='color:#ff0000'>Please Enter Last Date of admission</span>";
						document.getElementById('lastDate').focus();
						return false;
					}
				else if(firstList=="" ||firstList=='yyyy/mm/dd')
					{
						document.getElementById('aFirstMsg').innerHTML="<span style='color:#ff0000'>Please Enter First Merit List Date</span>";
						document.getElementById('firstList').focus();
						return false;
					}
				else if(secondList=="" ||secondList=='yyyy/mm/dd')
					{
						document.getElementById('aSecondMsg').innerHTML="<span style='color:#ff0000'>Please Enter Second Merit List Date</span>";
						document.getElementById('secondList').focus();
						return false;
					}
				else if(thirdList=="" ||thirdList=='yyyy/mm/dd')
					{
						document.getElementById('aThirdMsg').innerHTML="<span style='color:#ff0000'>Please Enter Third Merit List Date</span>";
						document.getElementById('thirdList').focus();
						return false;
					}
					return true;
		}