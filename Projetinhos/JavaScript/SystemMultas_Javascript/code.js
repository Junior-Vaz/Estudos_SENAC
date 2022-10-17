var nome = document.getElementById('inome') //variavel nome
var km = document.getElementById('ikm')// variavel km
var vei = document.getElementsByName('vei')// varivel radios
var res = document.getElementById('res')//variavel reultado
nome.focus()


function verificar(){
    if (vei[0].checked && nome.value) {
        
        
       //Criando div dinamicamente
        var resul = document.createElement('div')// variavel nova div
        res.appendChild(resul)
    
        //Adicionando CSS
        res.style.transition = '1s'
        res.style.width = '450px'
        res.style.height = '70px'
        res.style.background = 'orange'
        res.style.borderRadius = '10px'
        res.style.marginTop = '15px'
        
    }else{
        window.alert('Verifique seus dados!')
        nome.focus()
    } 

    
};


    