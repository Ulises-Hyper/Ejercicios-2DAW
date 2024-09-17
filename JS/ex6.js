// mod(a,b) -> mod(a-b,b) -> mod(b-a,b)

var num1 = prompt("Escriu un número")
var num2 = prompt("Escriu un altre número")

function mcd(a, b){
    if (b == 0) return a;
    return mcd(b, a % b);
}

console.log(`El mcd de ${num1} i ${num2} es: ${mcd(num1,num2)}`)


function mcm(a,b){
    if (b == 0) return a;
    return (a * b) / mcd(a, b);
}

console.log(`El mcm de ${num1} i ${num2} es: ${mcm(num1,num2)}`)