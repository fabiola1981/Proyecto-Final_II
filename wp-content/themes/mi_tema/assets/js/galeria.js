 var num=1;

function atras(){
 	num++;
 	if(num>3)
 		num=1;
 	var foto=document.getElementById("foto");
 	foto.src="foto"+num+".jpg";
 }

function adelante() {
	num--;
	if(num>1)
		num=3;
	var foto=document.getElementById("foto");
	foto.src="foto"+num+".jpg";
}

