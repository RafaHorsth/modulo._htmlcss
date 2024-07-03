var input = require('readline-sync')

function cabecalho (){ 
    console.log('')
    console,log('ex_fibonacci')
    console.log('')
}

function mfibonacci (valorA, valorB){
let string = ""
let valorC = 0 

for(let contador = 0; contador < 8; contador++){
    valorC = valorA + valorB
    valorA = valorB 
    valorB = valorC 
    string += valorC + " "
}

return string 
}

let numeroA = 0
let numeroB = 0
let fibonacci = ""


cabecalho()
numeroA = Number(input.question('Digite um valor: '))
numeroB = Number(input.question('Digite outro valor: '))

fibonacci = numeroA + " " + numeroB
fibonacci += mfibonacci(numeroA, numeroB)


console.clear()
cabecalho()
console.log(fibonacci)
console.log('')