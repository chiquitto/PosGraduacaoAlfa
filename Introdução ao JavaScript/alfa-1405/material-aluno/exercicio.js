/*1. Escreva um código que mostre os números ímpares entre 1 e 2000*/

for (var i = 1; i < 2000; i++) {
    if (i % 2 !== 0) {
        console.log(i);
    };
}

/*Escreva um código que calcule a soma de 1 até 100*/
soma = 0
for (var i = 1; i < 101; i++) {
    soma += i;
};
console.log(soma);

/*Crie um Array igual ao abaixo e mostre apenas os nomes das pessoas que tenham 4 letra.
*/
var pessoas = ["João", "José", "Maria", "Sebastião", "Antônio"];
for (var i = 0; i < pessoas.length; i++) {
    if (pessoas[i].length == 4) {
        console.log(pessoas[i]);
    };
};

/*Crie um botão em um arquivo html, que ao ser clicado aparece um número aleatório entre 0 e 50*/
document.getElementById('resultado').addEventListener('click', numAleatorio);

document.getElementById('somar').addEventListener('click', somar);

document.getElementById('subtrair').addEventListener('click', subtrair);

document.getElementById('multiplicar').addEventListener('click', multiplicar);

document.getElementById('dividir').addEventListener('click', dividir);


function numAleatorio(){
	var resultado = Math.floor(Math.random() * 51);
	console.log(resultado);
}

/*crie um formulario com 2 entradas numéricas, e 4 botoes que fazem as operações ariméticas básicas*/
function somar(){
	var valor1 = +document.getElementById('valor1').value;
	var valor2 = +document.getElementById('valor2').value;

	console.log(valor1 + valor2);
}
function subtrair(){
	var valor1 = +document.getElementById('valor1').value;
	var valor2 = +document.getElementById('valor2').value;

	console.log(valor1 - valor2);
}
function multiplicar(){
	var valor1 = +document.getElementById('valor1').value;
	var valor2 = +document.getElementById('valor2').value;

	console.log(valor1 * valor2);
}
function dividir(){
	var valor1 = +document.getElementById('valor1').value;
	var valor2 = +document.getElementById('valor2').value;

	console.log(valor1 / valor2);
}

/*6.*/
var nome = "chiquitto";
var array = nome.split('').sort().join('');
console.log(array);