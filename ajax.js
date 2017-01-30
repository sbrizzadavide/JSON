function myFun(sel, stud){
	//document.getElementById("test").innerHTML = "prova";
	//alert(stud);
	if(sel == "") return;
	document.getElementById("hide").style.display = "none";
	var i = parseInt(stud);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			obj = JSON.parse(this.responseText);
			if(sel=="0") document.getElementById("test").innerHTML = obj[i].name;
			if(sel=="1") document.getElementById("test").innerHTML = obj[i].surname;
			if(sel=="2") document.getElementById("test").innerHTML = obj[i].cl;
		}
	};
	xmlhttp.open("GET", "obj.php", true);
	xmlhttp.send();
}

function reload(){
	str="";
	var xmlhttp2 = new XMLHttpRequest();
	xmlhttp2.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			obj2 = JSON.parse(this.responseText);
			for(i=0; i<obj2.length; i++){
				str+="<option value=\"" + i + "\">" + obj2[i].name + "</option>";
			}
			document.getElementById("student").innerHTML = str;
		}
	};
	xmlhttp2.open("GET", "obj.php", true);
	xmlhttp2.send();
}
