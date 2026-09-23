
let total = prompt("Dime tu usuario")
let toti
let arr = [
    ["Daniel", "123D"],
    ["Lucas", "44D"],
    ["SiHao", "3982L"],
    ["Hashiko", "7765W"]
];

console.table(arr)
let real = false
let dix = []
arr.forEach(fila =>{
    if(fila.includes(total)){
        real = true
        dix.push(fila)
        toti = prompt("INGRESA TU CONTRASEÑA")
        dix.forEach (fila => {
            if(fila.includes(toti)){
                console.log("BIENVENIDO!!! :)")
                console.table(dix)
            } else {
                console.log("CONTRASEÑA INCORRECTA")
            }
        })
    } 
    if(real == false){
        console.log("USUARIO INEXISTENTE")
    }
})



