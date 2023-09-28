const numeros = prompt("Numeros").split(",").map(Number);

console.log(`Mayor: ${Math.max(...numeros)}`);
console.log(`Menor: ${Math.min(...numeros)}`);

if(new Set(numeros).size === 1) console.log("Todos son iguales");
else if(numeros[0] === numeros[1]) console.log("Primer y segundo iguales");
else if(numeros[0] === numeros[2]) console.log("Primer y tercer iguales");
else if(numeros[1] === numeros[2]) console.log("Segundo y tercer iguales");
