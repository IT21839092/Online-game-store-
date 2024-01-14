function checkPassword(){
	
	
	 var psw=document.getElementById("pwd").value;
	 var confairm=document.getElementById("pwd1").value;
	
	if(psw==confairm){
		
		alert("Success!");
		return true;
		
	}
	else{
	  alert("Password Mismatch!");
	  return false;
 	
	}
	
}
function enableButton(){
	
	
	
	if(document.getElementById("check").checked){
		
		document.getElementById("subbtn").disabled=false;
		
	}
	else{
		
		document.getElementById("subbtn").disabled=true;
		
	}
	
	
}