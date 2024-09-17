var num1 = prompt("Escriu un número ");

function esPrimo(num1) {
  for (i = 2; i < num1; i++) {
    if (num1 % i == 0) {
      return num1 + " no es primo";
    }
  }
  return num1 + " es primo";
}

console.log(esPrimo(num1));
