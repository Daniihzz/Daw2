let total = prompt("Dime una palabra")
//ni se como empezar xd
dix =[ 
["colegio", "school"], 
["casa", "home"],
["baño", "bathroom"],
["profesor", "teacher"]
]

dixx = []
let suma = 0
 console.table(dix)


dix.forEach(fila => {
   if(fila.includes(total)){
    dixx.push(fila);
   }
   else {
    console.log("No se ha encontrado la palabra")
   }
})

console.table(dixx)


