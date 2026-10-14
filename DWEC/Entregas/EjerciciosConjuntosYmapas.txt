

const inscripciones = ["Lucia", "Mario", "Ana", "Lucia", "Diego", "Ana", "Sara"];

//Ejercicio 9.1

let nuevos = new Set(inscripciones)
console.log(nuevos)
console.log(nuevos.size)
console.log(nuevos.has("Diego"))
nuevos.add("Pablo")
nuevos.add("Mario")
for (let x of nuevos) {
    console.log(x)
}

console.log(nuevos.size, "No acepta replicados al haberlo convertido en set")



const autorizados = new Set(["A102", "B205", "C310", "D415"]);

if (autorizados.has("B205") && autorizados.has("X999")) {
    console.log("Estan autorizados")
} else {
    console.log("No estan autorizados")
}

autorizados.delete("C310")
console.log(autorizados)
console.log(autorizados.delete("X999"))
autorizados.add("E520")
autorizados.add("F625")
console.log("Codigos autorizados: ", autorizados, "total: ", autorizados.size)


//9.3

const pendientes = new Set(["PC01", "PC03", "PC05", "PC07", "PC09"]);
const revisados = ["PC03", "PC07", "PC11"];

for (let x of revisados) {
    if (pendientes.has(x)) pendientes.delete(x)
}

console.log("PC05 sigue pendiente: ", pendientes.has("PC05"))

pendientes.add("PC12")
pendientes.add("PC14")

for (let x of pendientes) {
    console.log(x)
}
console.log(pendientes.size)


//9.4
const identificadores = new Set([12, 5, 18, 3, 27, 9, 21, 6]);
console.log("Identificadores menores de 10: ")
for (let x of identificadores) {
    if (x < 10) {
        console.log(x)
    }
}
for (let x of identificadores) {
    if (x < 10) {
        identificadores.delete(x)
    }
}

console.log("Identificadores que permanecen: ")
for (let x of identificadores) {
    console.log(x)
}

console.log(identificadores.size)

console.log("Pertenece el 18:", identificadores.has(18))



// 10 MAPAS

const carta = new Map([
    ["cafe", 1.50],
    ["te", 1.80],
    ["tostada", 2.20],
    ["zumo", 2.70]
]);

console.log(carta.get("te"))
console.log("Hay bocadillos en la carta: ", carta.has("bocadillos"))
carta.set("bocadillo", 1.70)
carta.delete("tostada")
for (let [x, p] of carta) {
    console.log(x, p)
}

console.log("elementos restantes de la carta:", carta.size)



//10.2
const almacen = new Map([
    ["teclados", 12],
    ["ratones", 8],
    ["monitores", 5],
    ["cables", 20]
]);

console.log("eXistencias de ratones:", almacen.get("ratones"))

almacen.set("ratones", almacen.get("ratones") + 6)
console.log("eXistencias de ratones:", almacen.get("ratones"))
almacen.set("monitores", almacen.get("monitores") + 3)
console.log("contienen impresoras:", almacen.has("impresoras"))
almacen.set("impresoras", 2)

for (let [x, p] of almacen) {
    console.log(x, p)
}

//10.3
const puntuaciones = new Map([
    ["Ana", 18],
    ["Hugo", 12],
    ["Irene", 24],
    ["Leo", 16]
]);

puntuaciones.set("Hugo", puntuaciones.get("Hugo") + 5)
puntuaciones.set("Irene", puntuaciones.get("Irene") - 3)
puntuaciones.set("Nora",20)

for (let [x, p] of puntuaciones)if(p >= 20)console.log(x, p)


console.log("Hay un total de participantes de:", puntuaciones.size)
if(puntuaciones.has("Leo"))puntuaciones.delete("Leo")

//10.4
const existencias = new Map([
["folios", 6],
["bolígrafos", 14],
["carpetas", 3],
["grapadoras", 9],
["rotuladores", 2]
]);
console.log("Productos con menos de 10 unidades:")
for(let [x,p] of existencias){
if(p < 10){
    console.log(x)
    existencias.set(x, existencias.get(x) + 5)
}
}
console.log("...................")
for(let [x,p] of existencias)console.log(x,p)

console.log("tiene existencias totales:" , existencias.size)
let sum = 0
for(let [x,p] of existencias){
sum += p
}
console.log("Suma total de existencias:", sum)