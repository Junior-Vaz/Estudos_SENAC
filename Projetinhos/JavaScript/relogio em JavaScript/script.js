
function Carregar() {
    var msg = document.getElementById('msg')
    var img = document.getElementById('imagem')
    var back = document.getElementById('back')
    var data = new Date()
    var hora = data.getHours()

    if (hora >= 0 && hora <= 12 ) {
        //Bom dia
        msg.innerHTML = `Bom dia !! Agora são ${hora} Hora`
        img.src = 'imagens/manhã1.png'
        back.style.background = 'yellow'    
    }else if (hora >= 12 && hora <= 18) {
        //Boa tarde!!
        msg.innerHTML = `Boa tarde !! Agora são ${hora} Hora`
        img.src = 'imagens/tarde1.png'
        back.style.background = 'orange'
    }else{
        //Boa noite!!
        msg.innerHTML = `Boa tarde !! Agora são ${hora} Hora`
        img.src = 'imagens/noite1.png'
        back.style.background = 'black'
    }
}
/*
const pessoa =  {
    nome:'junior ',
    sobrenome:'Faustino de carvalho junior ',
    idade: '24 anos ',
    datanasc: '02/06/1998 ',
    nomeidade: function completo() {
        return this.nome + this.sobrenome + this.idade + this.datanasc;
    }
};

const carro =  {
    modelo: 'Fiat ',
    placa: 'YHT8900 ',
    cidade: 'Videira ',
    UF:'SC ',
    fichaV: function ficha() {
        return this.modelo + this.placa + this.cidade + this.UF
    }
};

console.log(carro.fichaV())
*/