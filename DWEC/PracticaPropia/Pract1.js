// MAP PARA MODIFICAR OBJETOS
let numeros = [5, 10, 15, 20];

let dobles = numeros.map(numero => numero * 2);

console.table(dobles)

let nombres = ["dani", "bachira", "isagi", "nagi"];

let mayus = nombres.map(total => total.toUpperCase());
console.table(mayus)

let personajes = [
    { nombre: "Bachira", edad: 17 },
    { nombre: "Isagi", edad: 17 },
    { nombre: "Nagi", edad: 18 }
];

let edades = personajes.map(xx => xx.edad);
console.table(edades);

let info = personajes.map(k => `${k.nombre} tiene ${k.edad} años`)
console.log(info)


let juegos = [
    { nombre: "Minecraft", precio: 30 },
    { nombre: "Terraria", precio: 10 },
    { nombre: "Undertale", precio: 10 }
];

let info2 = juegos.map(p => `${p.nombre} cuesta ${p.precio}€`)
console.log(info2)

let productos = [
    { nombre: "Camiseta", precio: 20 },
    { nombre: "Pantalón", precio: 40 },
    { nombre: "Zapatillas", precio: 60 }
];

let nuevos = productos.map(p => ({
    nombre: p.nombre,
    precio: (p.precio) + (p.precio * 0.10)
}))

// FILTER PARA QUEDARTE CON ALGUNOS ELEMENTOS

let ages = [12, 18, 15, 21, 16, 25];

let resul = ages.filter(x => x >= 18);
console.log(resul)


let juegos2 = [
    { nombre: "Minecraft", precio: 30 },
    { nombre: "Terraria", precio: 10 },
    { nombre: "Elden Ring", precio: 50 },
    { nombre: "Undertale", precio: 10 }
];

let poland = juegos2.filter(x => x.precio >= 20)
let poland2 = juegos2.filter(x => x.precio >= 20 && x.precio < 40)



let mina = [
    [1, 2, 3, 4],
    [5, 4, 7, 8, 9]
]

console.table(mina)

// EJercicios de practica

// Hacer que el numero se multiplique por 3
let numeross = [2, 4, 6, 8, 10];

let triples = numeross.map(x => x*3)
console.table(triples)

let nombress = ["dani", "bachira", "isagi", "nagi"];

let largos = nombress.filter(x => x.length>4)
console.log(largos)


let personajesss = [
    { nombre: "Bachira", edad: 17 },
    { nombre: "Isagi", edad: 17 },
    { nombre: "Nagi", edad: 18 },
    { nombre: "Rin", edad: 16 }
];

let nombrecitos = personajesss.map(x=>x.nombre)


let juegoss = [
    { nombre: "Minecraft", precio: 30 },
    { nombre: "Terraria", precio: 10 },
    { nombre: "Elden Ring", precio: 50 },
    { nombre: "Undertale", precio: 10 }
];

let nuevosJuegos = juegoss.map(x=>x.precio*2).filter(p=>p > 20)
let nuevosJuegoss = juegoss.filter(p=>p.precio > 20).map(x=> x.nombre.toUpperCase())


// let personajesss = [
//     { nombre: "Bachira", edad: 17 },
//     { nombre: "Isagi", edad: 17 },
//     { nombre: "Nagi", edad: 18 },
//     { nombre: "Rin", edad: 16 }
// ];

personajesss.forEach(x => {
    console.log(x.nombre + " tiene " + x.edad)
})

nombres = ["Dani", "Bachira", "Isagi", "Nagi"];

nombres.forEach((nombre,indice)=>{
console.log(nombre,indice)
})

nombres.forEach((nombre,indice)=>{
    console.log(nombre + " esta en la posicion " + indice )
})


personajesss.forEach((nom, ind)=>{
    console.log(nom.nombre + " esta en la posicion " + ind + " y tiene " + nom.edad + " años" )
})

personajesss.filter(x=>x.edad > 16).forEach(p =>{
console.log(p.nombre + " tiene " + p.edad+" años")
})

personajesss.find(x => x.nombre === "Nagi")

let precios = [10, 25, 15, 50];

let total = precios.reduce((acum, precio)=>{},0)

// ... mete todos los elementos de ese ARRAY
let frutas = ["manzana", "pera", "plátano"]
let nuevasFrutas = [...frutas, "naranja"]

 personajes = ["Nagi", "Reo", "Bachira"];

let nuevoPer = ["Isagi", ...personajes, "Rin"]

function mostrarPersonajes(...perso){
    return perso
}


const personaje = {
    nombre: "Nagi",
    edad: 18
};

console.log(personaje.equipo?.nombre)









///////////////////////////////////////////////////////////////////////////////////////////////////////////

