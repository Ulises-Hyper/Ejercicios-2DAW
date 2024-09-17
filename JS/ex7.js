var num1 = prompt("Escribe un numero: ")
function esPrimo(num1) {
  for (var i = 2; i < num1; i++) {
    if (num1 % i == 0) {
      return false;
    }
  }
  return true;
}

var count = num1;
var i = 1;

while(count > 0){
  if(esPrimo(i)){
    console.log(i)
    count--;
  }
  i++
}
