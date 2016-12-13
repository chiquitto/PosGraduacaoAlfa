window.addEventListener('load',init);

function init(event){
	document.getElementById('frm').addEventListener('submit',frmSubmit);
	//document.addEventListener('contextmenu',btDireito);
	document.addEventListener('keypress',teclado);

}
function teclado(event){
	console.log(String.fromCharCode(event.charCode));
}

//function btDireito(event){
//	event.preventDefault();
//}

function frmSubmit(event){
	var input = document.getElementById('texto');

	if(input.value == ''){
		event.preventDefault();
		window.alert("Informe seu nome completo");
		input.focus();
		return;
	}

	input.value = input.value.toUpperCase();
}

