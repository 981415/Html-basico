var timerId = null; //armazena a chamada da função timeOut

function iniciaJogo() {
    /* alert('jogo Iniciado') */
    var url = window.location.search; //recupera só o nivel junto com o interrogação

    var nivel_jogo = url.replace("?", "")

    var tempo_segundo = 0;

    if (nivel_jogo == 1) { // nevel 1 facil -> 120 segundos
        tempo_segundo = 120
    }
    if (nivel_jogo == 2) {  // nevel 2 facil -> 60 segundos
        tempo_segundo = 60
    }
    if (nivel_jogo == 3) {  // nevel 3 facil -> 30 segundos
        tempo_segundo = 30
    }

// inserindo segundos no span

document.getElementById('cronometro').innerHTML = tempo_segundo // INNERHTML INSERE VALORES DENTRO DO HTML

    var qtde_baloes = 30;
        
    criaBaloes(qtde_baloes)

    document.getElementById('baloes_inteiros').innerHTML = qtde_baloes
    document.getElementById('baloes_estourados').innerHTML = 0

    contagem_tempo(tempo_segundo + 1) 
}

function contagem_tempo(segundos){

    segundos = segundos - 1

    if (segundos == -1) {
        clearTimeout(timerId) // para a execução do setTimeout
        game_over()
        return false
    }

    document.getElementById('cronometro').innerHTML = segundos

    timerId = setTimeout("contagem_tempo("+segundos+")", 1000)

}

function game_over(){
    alert('fim de jogo, ainda restaram balões a serem estourados')
}

function criaBaloes(qtde_baloes){
    for(var i = 1; i <= qtde_baloes; i++){

        var balao = document.createElement("img"); //cria um elemento dentro do html
        balao.src = "imagens/balao_azul_pequeno.png";
        balao.style.margin = '10px'
        balao.id = 'b' +i
        balao.onclick = function(){estourar(this)}

        document.getElementById('cenario').appendChild(balao)
    }
}

function estourar(e){
    var id_balao = e.id

    document.getElementById(id_balao).setAttribute("onclick", "")

    document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png'
    
    pontuacao(-1)
}

function pontuacao(acao){

    var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML
    var baloes_estourados = document.getElementById('baloes_estourados').innerHTML

    baloes_inteiros = parseInt(baloes_inteiros)
    baloes_estourados = parseInt(baloes_estourados)

    baloes_inteiros = baloes_inteiros + acao
    baloes_estourados = baloes_estourados - acao

    document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros
    document.getElementById('baloes_estourados').innerHTML = baloes_estourados

    situacao_jogo(baloes_inteiros, baloes_estourados)

}

function situacao_jogo(baloes_inteiros){
    if (baloes_inteiros == 0) {
        alert("Parabens, todos os balões forma estourados")
        parar_jogo()
    }

function parar_jogo(){
    clearTimeout(timerId)
}
}