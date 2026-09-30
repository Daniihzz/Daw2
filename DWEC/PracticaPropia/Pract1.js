// REPASO FUNCIONES
function nombreFuncion(){
    return "hola"
}

function sumar(a,b){
    return a + b
}

let resultado = sumar(5,3)

function nombre(nom){
    return "Hola "+ nom
}

// PÀRA MOSTRAR
console.log(nombre("Daniel"))


// PARA CREAR OBJETOS
let jugador = {
    nombre: "Daniel",
    nivel: 20,
    vida: 100,
    ataque: 25
}


function recibirDanio(jugador, daño){
    jugador.vida -= daño;
}


function recibirDanio(jugador, daño){
    jugador.vida -= daño;
}








// PARA ACCEDER A LOS DATOS
console.log(jugador.nombre)
let arr = [[1,2,3,4,5],
[1,2,3,4,5],
[1,2,3,4,5]
];
 

console.table(arr);

almacen:
for(let i = 0;i < arr.length;i++){
    for(let j = 0; j<arr[i].length;j++){
        if(i === 2 && j === 4){
            console.log("Producto localizado")
            break almacen;
        } else {
          console.log(i + " " + j);
        }
       
    }
}
