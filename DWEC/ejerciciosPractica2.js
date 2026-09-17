let num = Number(prompt("Seleccion un numero entero"))
let sum = 1
let total = " "
let guarda = num

if(3 >2){
    for(let i = 1; i<num;i++){

       sum *= guarda // 5*4+4*3
       total += guarda+"x" 
       guarda-=1
       console.log(sum)
       
    }
    console.log(total + "="+sum)
}

