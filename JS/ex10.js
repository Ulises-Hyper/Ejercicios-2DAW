var blanco = "____";
var negro = "███";

document.write("<h1>Tablero de ajedrez en JS</h1>");
document.write("<table border=4px>")

for(var i = 1; i <= 4; i++){
    document.write("<tr>")
    for(var a = 1; a <= 4; a++){
        document.write(`<td>${blanco}</td>`);
        document.write(`<td>${negro}</td>`);
    }
    document.write("<tr>");
    for(var a = 1; a <= 4; a++){
        document.write(`<td>${negro}</td>`);
        document.write(`<td>${blanco}</td>`);
    }
}

document.write("</table>");