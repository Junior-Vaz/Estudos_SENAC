//function() constructor
// expressão new
//Criar um novo objeto
//this keyword

/*function Person(name) {
    this.name = name
    this.walk = function() {
        return this.name + " está andando"
    }
}

const mayk = new Person("Mayk")
const joao = new Person("João")

console.log(mayk.walk())
console.log(joao.walk())*/


/*class aluno {
    constructor(nome,idade,nota){
        this.nome = nome;
        this.idade = idade;
        this.nota = nota;
    
    }
    media(){
       return  Number(this.nota) + Number(10)
    }
}


function gerarDado() {
    //criando variaveis ou arrays
    let nomeAl = document.getElementById('iname')
    let idadeAl = document.getElementById('i_idade')
    let notaAl = document.getElementById('inota')
    let res = document.getElementById('res')

    //construindo
    const novoAluno = new aluno (nomeAl.value,idadeAl.value,notaAl.value);
    //retornando

        res.innerText = `Aluno(a) ${novoAluno.nome} idade: ${novoAluno.idade} nota: ${novoAluno.nota} a soma da sua nota ${novoAluno.media()}`

        if (novoAluno.nota >10) {
            $(document).ready(function(){
                $("#button").click(function(){

                    $("#div").addClass(".div")
                    $("#div").text(`Aluno(a) ${novoAluno.nome} Aprovado(a), Parabéns`)
                });
                
            });
            
        }else{
           res.innerHTML = (`Aluno(a) ${novoAluno.nome} Reprovado(a), tente novamente`)
        }
    
    
}

function name(nome = '') {
    if(nome === ''){
        throw 'Nome é necessário!'
    }

    console.log('depois do erro')
}

try{
    name()
}catch(e){
    console.log(e)
}*/

