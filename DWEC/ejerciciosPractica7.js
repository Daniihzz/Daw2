let num1 = Number(prompt("Dame un numero"))
let num2 = Number(prompt("Dame un numero"))

if(num1 < num2){
 while (num1!=num2){
       num1++
       if(num1 != num2){
        console.log(num1)
       }
       
    }
} else {
    console.log("ERROR!!")
} 