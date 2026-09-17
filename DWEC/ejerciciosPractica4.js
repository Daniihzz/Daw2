let num = Number(prompt("Dame un numero"))
let total = []

for(let i = 0; i<=10; i++){
    total.push(num*i)
}

console.table(total)