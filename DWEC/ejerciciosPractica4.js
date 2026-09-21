let num = Number(prompt("Dame un numero"))
let total = []
if (!isNaN(num)) {
    //el isNan es q no recibe nada diferente a un numero
    if (Number.isInteger(num)) {
        //esto para ver si es entero si o si
        for (let i = 0; i <= 10; i++) {
            total.push([i, "x", num, "=", num * i])
        }
        console.table(total)
    } else {
        console.log("No se ha introducido un numero valido")
    }
} else {
        console.log("No se ha introducido un numero valido")
}


