var nome = "Ronaldo "
/* var lista = ['maça', 'banana']



for (let i= 0; i < lista.length; i++) {
    
    document.write (lista[i])
    document.write ('<br>')
}
 */
/* /* document.write(nome)
document.write('<br/><br>')
document.write(nome2)
 */

/* document.write(nome + nome2)

alert(nome) */
//document.write(nome) escreve o nome na tela */

/* var lista_coisas = Array()
    lista_coisas['frutas'] = Array()
    lista_coisas['pessoas'] = Array()

    lista_coisas['frutas'][0] = 'banana'
    lista_coisas['frutas'][1] = 'uva'
    lista_coisas['frutas'][2] = 'manga'

    lista_coisas['pessoas'][0] = 'ana'
    lista_coisas['pessoas'][1] = 'maria'
    lista_coisas['pessoas'][2] = 'pedro'
    
    document.write(lista_coisas['pessoas'][1]) */

/*     var x = 1
    while (x <= 10) {
        document.write ("Ronaldo")
        document.write ('</br>')
        x++
    } */

    var x = 1;
    do {
        document.write(x + '<br/>');
        x++;
    } while (x <= 10);

    document.write('<br>')

    function calculaTerreno(largura , comprimento){
        largura = parseFloat(largura)
        comprimento = parseFloat(comprimento)

        area = largura * comprimento;
        return area;
    }

    //document.write(calculaTerreno(10,10))

    var largura = prompt('Digite a largura do terreno: ')
    var comprimento = prompt('Digite o Comprimento do terreno: ')

    var recebe = calculaTerreno(largura, comprimento)

    document.write(recebe + ' metros quadrados')

  