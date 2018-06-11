var chk1 = document.getElementById('check1');
var chk2 = document.getElementById('check2');
var chk3 = document.getElementById('check3');
var chk4 = document.getElementById('check4');
var chk5 = document.getElementById('check5');
var chk6 = document.getElementById('check6');


function activar1(){
	chk1.checked = true;
	chk2.checked = false;
	chk3.checked = false;
	chk4.checked = false;
	chk5.checked = false;
	chk6.checked = false;
} 
function activar2(){
	chk1.checked = false;
	chk2.checked = true;
	chk3.checked = false;
	chk4.checked = false;
	chk5.checked = false;
	chk6.checked = false;
}
function activar3(){
	chk1.checked = false;
	chk2.checked = false;
	chk3.checked = true;
	chk4.checked = false;
	chk5.checked = false;
	chk6.checked = false;
}
function activar4(){
	chk1.checked = false;
	chk2.checked = false;
	chk3.checked = false;
	chk4.checked = true;
	chk5.checked = false;
	chk6.checked = false;
}
function activar5(){
	chk1.checked = false;
	chk2.checked = false;
	chk3.checked = false;
	chk4.checked = false;
	chk5.checked = true;
	chk6.checked = false;
}
function activar6(){
	chk1.checked = false;
	chk2.checked = false;
	chk3.checked = false;
	chk4.checked = false;
	chk5.checked = false;
	chk6.checked = true;
}

function idioma(idioma){
	if(idioma == 1){
		activar1();
	}
	if(idioma == 2){
		activar2();
	}
	if(idioma == 3){
		activar3();
	}
	if(idioma == 4){
		activar4();
	}
	if(idioma == 5){
		activar5();
	}
	if(idioma == 6){
		activar6();
	}
}