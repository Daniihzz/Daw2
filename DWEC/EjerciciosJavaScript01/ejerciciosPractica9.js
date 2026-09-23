let arr = [
    ["a0","a1","a2"],
    ["b0","b1","b2"],
    ["c0","c1","c2","c3"]
];
console.table(arr)
// Antes de unificarla 

let total = []

for(let i = 0;i < arr.length;i++){
    for(let j = 0; j<arr[i].length;j++){
        total.push(arr[i][j])
    }
}

console.table(total)
// Despues de unificarla
