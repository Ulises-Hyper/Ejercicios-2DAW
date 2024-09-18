var cadena = prompt("Introdueix una paraula (palindrom)");

function palindrom(str){
    let strInvertido = "";
    for(i = str.length - 1; i >= 0; i--){
        strInvertido += str[i];
    }

    str = str.toLowerCase()
    strInvertido = strInvertido.toLocaleLowerCase();

    if(str == strInvertido){
        console.log(`${str} és un palindrom`);
    } else if (str != strInvertido) {
        console.log(`${str} no és un palindrom`)
    }
}

palindrom(cadena);