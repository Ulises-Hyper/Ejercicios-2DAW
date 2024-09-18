var num1 = prompt("Introdueix un número(factorial): ")

function Factorial(num1){
    var factorial;
    if(num1 == 0 || num1 == 1){
        return factorial = 1;
    } else if(num1 > 1){
        for(var i = 0; i < num1; i++){
            factorial = num1 * Factorial(num1 - 1);
            return factorial;
        }
    }
}

console.log(Factorial(num1))