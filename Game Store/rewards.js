function btn1(event){

  var rew= document.getElementById("rId").value
  if(rew==""){
    alert("Please enter Reward ID")
  }else{
    if(document.getElementById("rew1").checked){
      alert("Reward A Collected!");
    }
    else if(document.getElementById("rew2").checked){
      alert("Reward B Collected!");
    }
    else if(document.getElementById("rew3").checked){
      alert("Reward C Collected!");
    }
    else if(document.getElementById("rew4").checked){
      alert("Reward D Collected!");
    }
    else{
      alert("Please select the Reward!");
      document.getElementById("rew4").checked=false;
    }
  }
  
}  
