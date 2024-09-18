var cadena = prompt("Escriu una paraula ");

function invertiCadena(str){
    let strInvertido = "";
    for(var i = str.length - 1; i >= 0; i--){
        strInvertido += str[i];
    }
    console.log(strInvertido);
}

invertiCadena(cadena)