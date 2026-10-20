
const productos = [
    { id: 1, nombre: "Teclado", precio: 25 },
    { id: 2, nombre: "Ratón", precio: 15 },
    { id: 3, nombre: "Monitor", precio: 150 }
];

function nuevoProd(ide, name, price) {
    const prod = {
        id: ide,
        nombre: name,
        precio: price
    };
    productos.push(prod);
}

function encontrarProd(id) {
    const x = productos.find(p => p.id === id);

    if (x) {
        console.log(x.nombre);
        console.log(x.precio);

    } else {
        console.log("producto no encontrado");
    }
}

function cambiarPrecio(id, price) {
    const x = productos.find(p => p.id === id);

    if (x) {
        x.precio = price;

    } else {
        console.log("producto no encontrado");
    }
}

function buscarBaratos(maxPrecio) {
    const arr = productos.filter(x => x.precio <= maxPrecio);
    if (arr.length > 0) {
        console.log(arr);
    } else {
        console.log("No hay prodcutos tan baratos");
    }
}

function nombresBaratos(maxPrecio) {
    const total = productos.filter(x => x.precio <= maxPrecio);
    if (total.length > 0) {
        const nuevo = total.map(x => x.nombre);
        console.log(nuevo);
    } else {
        console.log("No hya productos tan baratos");
    }
}

function calcularValorTotal() {
    const total = productos.reduce((acu, producto) => {
        return acu + producto.precio;
    }, 0);
    console.log(total);
}

function sumarProductosCaros() {
    const total = productos.filter(x => x.precio > 20);
    const nuevo = total.reduce((acu, x) => {
        return acu + x.precio;
    }, 0)
    console.log(nuevo);
}

function ordenarProductos() {
    const total = productos.sort((a, b) => a.precio - b.precio);
    console.log(total);
}

const productoss = [
    { id: 1, nombre: "Teclado", precio: 25, stock: 8 },
    { id: 2, nombre: "Raton", precio: 15, stock: 0 },
    { id: 3, nombre: "Monitor", precio: 150, stock: 3 },
    { id: 4, nombre: "Alfombrilla", precio: 10, stock: 12 },
    { id: 5, nombre: "Auriculares", precio: 45, stock: 0 }
];

function buscarProductosDisponibles() {
    const fil = productoss.filter(x => x.stock > 0);
    const ord = fil.sort((a, b) => b.precio - a.precio);
    const nom = ord.map(x => x.nombre);
    console.log(nom);
}

const resultado = productoss
    .filter(x => x.stock > 0)
    .sort((a, b) => b.precio - a.precio)
    .map(x => x.nombre);

function buscarProductosDisponibles2() {
    const resul = productoss
        .filter(x => x.stock > 0)
        .sort((a, b) => b.precio - a.precio)
        .map(x => x.nombre + ": " + x.precio + "€");
    console.log(resul)
}

function buscarPosicionProducto(id) {
    const posicion = productoss.findIndex(x => x.id == id);
    if (posicion != -1) {
        console.log(posicion);
    } else {
        console.log("producto no encontrado");
    }
}

const alumnos = [
    { nombre: "Lucía", nota: 7 },
    { nombre: "Mario", nota: 4 },
    { nombre: "Ana", nota: 8 },
    { nombre: "Diego", nota: 6 }
];

function todosAprobados() {
    console.log(alumnos.every(x => x.nota >= 5));
}


const libros = [
    { id: 1, titulo: "JavaScript", precio: 30, disponible: true },
    { id: 2, titulo: "HTML y CSS", precio: 20, disponible: true },
    { id: 3, titulo: "Aprende PHP", precio: 25, disponible: false },
    { id: 4, titulo: "SQL desde cero", precio: 18, disponible: true },
    { id: 5, titulo: "Java avanzado", precio: 40, disponible: false }
];

const prestamos = new Set();

function buscarLibro(id) {
    const x = libros.find(x => x.id === id);
    if (x) {
        console.log(x.titulo + ": " + x.precio + "€");
    } else {
        console.log("Libro no encontrado");
    }
}

function prestarLibro(id) {
    const x = libros.find(x => x.id === id);
    if (x) {
        if (x.disponible) {
            x.disponible = false;
            prestamos.add(x.id);
        } else {
            console.log("No se puede prestar");
        }
    } else {
        console.log("Libro no encontrado");
    }
}

function mostrarDisponibles() {
    console.log(libros
        .filter(x => x.disponible)
        .sort((a, b) => b.precio - a.precio)
        .map(x => x.titulo)
    );
}

function resumenBiblioteca() {
    console.log("Libros en total: " + libros.length);
    console.log("Libros disponibles: " + libros.filter(x => x.disponible).length);
    console.log("Precio total: " + libros.reduce((acu, x) => { return acu + x.precio }, 0));
    console.log("Todos los libros cuestan mas de 10€: " + libros.every(x => x.precio > 10));
    console.log("IDs de prestamos registrados: " + prestamos.size);
}




function devolverLibro(id) {
    const x = libros.find(x => x.id === id);
    if (x) {
        if (prestamos.has(x.id)) {
            x.disponible = true;
            prestamos.delete(x.id);
            console.log("Libro devuelto correctamente");
        } else {
            console.log("Este libro no estaba prestado");
        }
    } else {
        console.log("Libro no encontrado");
    }
}

////////////////////////////////////////////////////////////////////////
const personajes = [
    { nombre: "Luffy", poder: 90 },
    { nombre: "Zoro", poder: 85 },
    { nombre: "Usopp", poder: 40 },
    { nombre: "Sanji", poder: 80 }
];

function mostrarPersonajes() {
    personajes.forEach(x => {
        console.log(x.nombre + " tiene " + x.poder + " de poder");
    })
}

function mostrarFuertes() {
    personajes.forEach(x => {
        if (x.poder >= 80) console.log(x.nombre + " tiene " + x.poder + " de poder");
    })
}


function cuenta5() {
    let cuenta = 5;
    let co = setInterval(() => {
        console.log(cuenta);
        cuenta--;
        if (cuenta < 0) {
            clearInterval(co);
            console.log("DESPEGUE");
        }
    }, 1000);
}

function cuenta10() {
    let costa = 10;
    let rica = setInterval(() => {
        console.log(costa);
        costa--;
        if (costa < 0) {
            clearInterval(rica);
            console.log("!Se acabo el tiempo¡");
        }
    }, 1000);
}

function promesas() {
    let pedido = new Promise((resolve, reject) => {
        resolve("Hamburguesa entregada");
    });

    pedido.then((resultado) => {
        console.log(resultado);
    })

    let tarea = new Promise((resolve, reject) => {
        reject("Error al descargar los datos");
    });

}

function tareaPromesa1() {
    let contraseñaCorrecta = false;
    let inicioSesion = new Promise((resolve, reject) => {
        if (contraseñaCorrecta) {
            resolve("Bienvenido");
        } else {
            reject("Contraseña incorrecta");
        }
    });
    inicioSesion
        .then((resultado) => {
            console.log(resultado);
        })
        .catch((error) => {
            console.log(error);
        })
}

function tarea2() {
    console.log("Iniciando descarga...");
    let descargaCorrecta = true;
    let promesa = new Promise((resolve,reject)=>{
        setTimeout(()=>{
            descargaCorrecta?resolve("Descarga completada"):reject("Error al descargar el archivo");
        },3000);
       
    });
    promesa
    .then((resultado)=>{
        console.log(resultado);
    })
    .catch((error)=>{
        console.log(error);
    })
}

function comprarProducto(){
    let hayStock = false;
    console.log("Comprobando existencias");
    let promesa = new Promise((resolve,reject)=>{
        setTimeout(()=>{
            hayStock?resolve("compra realizada correctamente"):reject("Producto agotado");
        },2000);
    });
    promesa.then((resultado)=>{
        console.log(resultado);
    }).catch((error)=>{
        console.log(error);
    })

}

function calcularDescuento(){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            let precioOriginal = 200;
            let descuento = 15;
            let precioFinal = precioOriginal - (precioOriginal*descuento/100);
            resolve(precioFinal);
        },2000);
    })
}

calcularDescuento().then((precio)=>{
console.log("El precio es: " + precio);
});


async function saludar(){
    return "Hola";
}

saludar().then((mensaje)=>{
    console.log(mensaje);
});


function obtenerPrecio(){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve(80);
        },2000);
    });
}

async function mostrarPrecio(){
    let precio = await obtenerPrecio();
    console.log("El precio es: "+ precio);
}

mostrarPrecio();


function obtenerUsuario(){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            resolve("Usuario: Dani");
        },2000);
    });
} 
async function mostrarUsuario(){
    let usuario = await obtenerUsuario();
    console.log(usuario);
}

mostrarUsuario();



async function comprobarEdad(){
    let edad = 15;
    if(edad < 18){
        throw new Error("Eres menor de edad");
    }
    return "Puedes entrar";
}

comprobarEdad()
.then((resultado)=> console.log(resultado))
.catch((error) => console.log(error.message));

