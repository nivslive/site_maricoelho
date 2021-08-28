
/** SCROLL EVENT  **/

  $(document).ready(function(){
    var scrollTop = $('html, body').scrollTop();
    
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 600) {
            
            $(".animar").removeClass("animate-off-left");
            $(".animar").addClass("animate-on-left");
            
        } 



      





    });
 });





/** CRONOMETRO */





var data = '2021/6/14';
var falta = (new Date(data).getTime() - new Date().getTime()) / 1000;
console.log(falta)
var segundos = Math.round(falta % 60);
console.log(segundos)
var minutos = Math.round(falta / 60 % 60);
console.log(minutos)
var horas = Math.round(falta / 60 / 60 % 24);
console.log(horas)
var dias = Math.round(falta / 60 / 60 / 24);
console.log(dias)
var divs = document.querySelectorAll('#parcelas h1');

setInterval(function () {
    if (segundos == 0) {
        segundos = 60;
        minutos--;
    }
    if (minutos == 0) {
        minutos = 60;
        horas--;
    }
    if (horas == 0) {
        horas = 24;
        dias--;
    }
    segundos--;
    var contador = [dias, horas, minutos, segundos].forEach(function (parcela, i) {
        divs[i].innerHTML = parcela;
    });

}, 1000);






        
	