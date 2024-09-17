var num1 = prompt("Introdueix un número")
num1 = parseInt(num1);

for(i = 0; i < num1; i++){
    if(num1 % i == 0){
        console.log(`El ${num1} es divisor per ${i}`)
    }
}