function BrojTelefona(brojTel){
	var x = document.forms["kontakt-forma"]["usertel"];
	var broj = document.getElementById(brojTel).value;
	var reg = /^\(?[0-9]{3}(\-|\)) ?[0-9]{3}-[0-9]{4}$/;
	if(!(reg.test(broj))){
		alert("Unos nije ispravan!\nBroj mora biti u obliku 061-xxx-xxx ili 062-xxx-xxx.");
		x.focus();
		return false;
	}
	return true;
}

function ValidirajOnInput(id){
	var text;
	var x = document.forms["kontakt-forma"]["usertel"];
	var elemenat = document.getElementById(id);
	var podatak = document.getElementById(id).value;
	
	var reg = /^\(?[0-9]{3}(\-|\)) ?[0-9]{3}-[0-9]{4}$/;
	if(!(reg.test(podatak))){
		elemenat.style.backgroundColor = "tomato";
		text = "Ne zadovoljava format (123-123-1234)";
		document.getElementById("posalji").disabled = true;
		document.getElementById("error").innerHTML = text;
	}
	else{
		elemenat.style.removeProperty('background-color');
		document.getElementById("posalji").disabled = false;
	} 
}



function ValidirajOnInput2(id){
	var elemenat = document.getElementById(id);
	var podatak = document.getElementById(id).value;
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!(reg.test(podatak))){
		elemenat.style.backgroundColor = "tomato";
		document.getElementById("posalji").disabled = true;
	}
	else{
	 elemenat.style.removeProperty('background-color');
	 document.getElementById("posalji").disabled = false;
	 
	}
}

function ValidirajOnInput3(id){
	var elemenat = document.getElementById(id);
	var podatak = document.getElementById(id).value;
	var reg = /^[a-zA-Z ]{2,30}$/;
	if(!(reg.test(podatak))){
		elemenat.style.backgroundColor = "tomato";
		document.getElementById("posalji").disabled = true;
	}
	else {
	 elemenat.style.removeProperty('background-color');
	 document.getElementById("posalji").disabled = false;
	}
}

function ValidirajOnInput4(id){
	var elemenat = document.getElementById(id);
	var podatak = document.getElementById(id).value;
	var reg = /^[a-zA-Z ]{2,30}$/;
	if(!(reg.test(podatak))){
		elemenat.style.backgroundColor = "tomato";
		document.getElementById("posalji").disabled = true;
	}
	else {
		elemenat.style.removeProperty('background-color');
		document.getElementById("posalji").disabled = false;
	}
}

function Validiraj(brTel){
	if(!(BrojTelefona(brTel))){
		return false;
	}
	return true;
}