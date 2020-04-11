function calcular()
{
    var txta = document.getElementById('a');
    var txtb = document.getElementById('b');
    var txtc = document.getElementById('c');

    var a = Number(txta.value);
    var b = Number(txtb.value);
    var c = Number(txtc.value);
    
    var resultado = document.getElementById('resultado');
    resultado.innerHTML = 'Os valores detectados foram: a = ' + a + ' . b = ' + b + ' . c = ' + c;
    //resultado.innerHTML += '<p> Fórmula: ' + a + 'x²' + b + 'x' + 'c' + '=' + 0 + '</p>';

    var delta = (b * b) - (4 * a * c);
    var xlinha = - b + Math.sqrt(delta) / 2 * a;
    var xlinha2 = - b - Math.sqrt(delta) / 2 * a;


    resultado.innerHTML += '<p> O valor de Delta é: ' + delta + '</p>';
    resultado.innerHTML += '<p> O Valor de X é = ' + xlinha + '</p>';
    resultado.innerHTML += '<p> O Valor de X 2 é = ' + xlinha2 + '</p>';
}