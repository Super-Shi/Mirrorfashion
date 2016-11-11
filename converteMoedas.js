
function numberParaReal(numero){
var formatado = "R$" + numero.toFixed(2).replace(".",",");
return formatado;
}

function realParaNumber(texto){

var compartivelComParseFloat = texto.replace("R$ ","");
compartivelComParseFloat = compartivelComParseFloat.replace(",",".");
var valor = parseFloat(compartivelComParseFloat);
return valor;
}
