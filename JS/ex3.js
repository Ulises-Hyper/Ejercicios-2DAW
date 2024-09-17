var num1 = prompt("Digues un número");
var num2 = prompt("Digues un altre número");
var operacio = prompt("Que vols fer sumar o multiplicar?");
num1 = parseInt(num1);
num2 = parseInt(num2);

function sumar(num1,num2){
    return num1 + num2;
}

function multiplicar(num1, num2){
    return num1 * num2;
}

if(operacio == "sumar"){
    console.log(sumar(num1,num2));
} else if (operacio == "multiplicar"){
    console.log(multiplicar(num1,num2));
}