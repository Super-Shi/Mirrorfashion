var formatado = numberParaReal(9.9);
var numero = realParaNumber("R$ 120,35");

if (formatado == "R$9,90"){
	console.log("Conversão de moeda está funcionando");
} else {
	console.log("Conversao moeda errada");
};

console.log(formatado);
console.log(numero);