let salir = false
while (salir === false)  {
console.log("-------------------------------")
console.log("Pulse 1 para sumar")
console.log("Pulse 2 para restar")
console.log("Pulse 3 para multiplicar")
console.log("Pulse 4 para dividir")
console.log("Pulse 5 para obtener el modulo")
console.log("Pulse 6 para salir")
console.log("-------------------------------")
let opcion = prompt("Selecciona una opcion")
let total
let numeritoA
let numeritoB

switch(opcion){
    case "1":
        numeritoA = prompt("Selecciona un numero")
        numeritoB = prompt("Selecciona otro numero")
        total = numeritoA + numeritoB
        console.log(total)
        break;
        
    case "2":
        numeritoA = prompt("Selecciona un numero")
        numeritoB = prompt("Selecciona otro numero")
        total = numeritoA - numeritoB
        console.log(total)        
        break;
    case "3":
        numeritoA = Number(prompt("Selecciona un numero"))
        numeritoB = Number(prompt("Selecciona un numero"))
        total = numeritoA * numeritoB
        console.log(total)
        break;
        
    case "4":
        numeritoA = Number(prompt("Selecciona un numero"))
        numeritoB = Number(prompt("Selecciona un numero"))
        total = numeritoA / numeritoB
        console.log(total)
        break;
        
    case "5":
        numeritoA = Number(prompt("Selecciona un numero"))
        numeritoB = Number(prompt("Selecciona un numero"))
        total = numeritoA % numeritoB
        console.log(total)
        break;
    case "6":
        salir = confirm("¿Seguro que quieres salir?")
        break;
}
}
