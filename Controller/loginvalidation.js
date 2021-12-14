function validate(){
	var username=document.getElementById("sname").value;
	var password=document.getElementById("password").value;
	var confirmpassword=document.getElementById("cpassword").value;
	var phonenumber=document.getElementById("phone").value;
	//gender
	var valid =false;
	var checkgender=document.myform.gender;

	for(var loop=0; loop<checkgender.length;loop++)
	{
		if(checkgender[loop].checked)
		{
			valid =true;
			break;
		}
	}
	var selectuser=document.getElementById("selection").value;

	if(username.trim() =="")
	{
		document.getElementById("snamee").innerHTML="**You must fill up your name**";
		return false;
	}
	if(username.length<3)
	{
		document.getElementById("snamee").innerHTML="**You must fill up with a suitable name**";
		return false;
	}
	else{
		document.getElementById("snamee").innerHTML="";
	}
	 if(password.trim() =="")
	{
		
		document.getElementById("passwordd").innerHTML="**You must give a password**";
		return false;
	}
	if(password.length<6)
	{
		document.getElementById("passwordd").innerHTML="**Password should be more than 6 characters**";
		return false;
	}
	else{
		document.getElementById("passwordd").innerHTML="";
	}
	 if(confirmpassword.trim() =="")
	{
		document.getElementById("cpasswordd").innerHTML="**You must confirm your password**";
		return false;
	}
	if(confirmpassword != password)
	{
		document.getElementById("cpasswordd").innerHTML="**Password not matched**";
		return false;
	}
	else{
		document.getElementById("cpasswordd").innerHTML="";
	}
	 if(phonenumber.trim() =="" || phonenumber.length < 11 || phonenumber.length > 11)
	{

		document.getElementById("phonee").innerHTML="**You must fill up your phone number with 11 digits!**";
		return false;		
	}	
	if(isNaN(phonenumber)) 
	{

		document.getElementById("phonee").innerHTML="**You must fill up your phone number with only numbers!**";
		return false;		
	}	
	else{
		document.getElementById("phonee").innerHTML="";
	}	
	 if (!valid)
	{		
		
		document.getElementById("genderr").innerHTML="**Select your gender";
		return false; 
	}
	else{
		document.getElementById("genderr").innerHTML="";
	}
	 if(selectuser.trim() =="select")
	{
		alert("YOU HAVE TO SELECT ONE USER MODE!");
		return false;
	}	
	else{
		return true;
	}
}