function enableButton()
{
	
	if(document.getElementById("chkB").checked)
	{
		document.getElementById("subbtn").disabled=false;
	}
	
	else
	{
		document.getElementById("subbtn").disabled=true;
	}
	
	
}