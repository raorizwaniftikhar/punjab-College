// JavaScript Document

	function admissionForm()
		{
			var programName=document.getElementById('program').value;
			/*var seats=document.getElementById('totalseats').value;
			var admissionDate=document.getElementById('lastDate').value;
			var firstList=document.getElementById('firstList').value;
			var secondList=document.getElementById('secondList').value;
			var thirdList=document.getElementById('thirdList').value;*/
			alert('');
			
			
			
				if(programName=="" || programName=='Choose one program')
					{
						alert('Please Select Program');
						document.getElementById('program').focus();
						return false;
					}
				 
					return true;
		}