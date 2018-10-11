function det() {
	var a1=document.getElementById('s11').value;
	var a2=document.getElementById('s12').value;
	var a3=document.getElementById('s13').value;
	var a4=document.getElementById('s21').value;
	var a5=document.getElementById('s22').value;
	var a6=document.getElementById('s23').value;
	var a7=document.getElementById('s31').value;
	var a8=document.getElementById('s32').value;
	var a9=document.getElementById('s33').value;
	var res = parseInt(a1)*parseInt(a5)*parseInt(a9)+ parseInt(a2)*parseInt(a6)*parseInt(a7)+ parseInt(a3)*parseInt(a4)*parseInt(a8)- parseInt(a7)*parseInt(a5)*parseInt(a3)- parseInt(a8)*parseInt(a6)*parseInt(a1)- parseInt(a9)*parseInt(a4)*parseInt(a2);
	document.getElementById('result').innerHTML= res;
	console.log(res);
}
let button=document.getElementById('determinant');
button.addEventListener('click',det)