
$(".box").click(function(){
    $(".box").removeClass("active");
    $(this).addClass("active");
    let codigoItem = $(this).data("codigo");
    valores(codigoItem);
});

$('#type-service').change(function (){
     calculaValor ( $(this).val(), $('#size-property').val());
 });

$('#size-property').change(function (){
    calculaValor ( $('#type-service').val(), $(this).val());
});

var valorPorcentagem = 10;



function calculaValor (typeService, sizeProperty ) {
    debugger
    //Verificar 0 a 1000
    if (typeService == 'generalClean' && sizeProperty == '0-1000'){
        var valorService =  90;
        var hourService =  3;
    }
    else if (typeService == 'deepClean' && sizeProperty == '0-1000'){
        var valorService =  240;
        var hourService =  6;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '0-1000'){
        var valorService =  890;
        var hourService =  10;
    }
    //Verificar 1001 a 1500
    else if (typeService == 'generalClean' && sizeProperty == '1001-1500'){
        var valorService =  120;
        var hourService =  4;
    }
    else if (typeService == 'deepClean' && sizeProperty == '1001-1500'){
        var valorService =  240;
        var hourService =  7;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '1001-1500'){
        var valorService =  890;
        var hourService =  15;
    }
    //Verificar 1501 a 2000
    else if (typeService == 'generalClean' && sizeProperty == '1501-2000'){
        var valorService =  160;
        var hourService =  5;
    }
    else if (typeService == 'deepClean' && sizeProperty == '1501-2000'){
        var valorService =  320;
        var hourService =  8;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '1501-2000'){
        var valorService =  1780;
        var hourService =  20;
    }
    //Verificar 2001 a 2500
    else if (typeService == 'generalClean' && sizeProperty == '2001-2500'){
        var valorService =  190;
        var hourService =  6;
    }
    else if (typeService == 'deepClean' && sizeProperty == '2001-2500'){
        var valorService =  360;
        var hourService =  9;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '2001-2500'){
        var valorService =  2225;
        var hourService =  25;
    }
    //Verificar 2501 a 3000
    else if (typeService == 'generalClean' && sizeProperty == '2501-3000'){
        var valorService =  210;
        var hourService =  7;
    }
    else if (typeService == 'deepClean' && sizeProperty == '2501-3000'){
        var valorService =  400;
        var hourService =  10;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '2501-3000'){
        var valorService =  2670;
        var hourService =  30;
    }
    //Verificar 3001 a 3500
    else if (typeService == 'generalClean' && sizeProperty == '3501-4000'){
        var valorService =  270;
        var hourService =  7;
    }
    else if (typeService == 'deepClean' && sizeProperty == '3501-4000'){
        var valorService =  480;
        var hourService =  10;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '3501-4000'){
        var valorService =  3560;
        var hourService =  30;
    }
    //Verificar 3501 a 4000
    else if (typeService == 'generalClean' && sizeProperty == '3501-4000'){
        var valorService =  270;
        var hourService =  9;
    }
    else if (typeService == 'deepClean' && sizeProperty == '3501-4000'){
        var valorService =  480;
        var hourService =  12;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '3501-4000'){
        var valorService =  3560;
        var hourService =  40;
    }
    //Verificar 4001 a 4500
    else if (typeService == 'generalClean' && sizeProperty == '4001-4500'){
        var valorService =  300;
        var hourService =  10;
    }
    else if (typeService == 'deepClean' && sizeProperty == '4001-4500'){
        var valorService =  520;
        var hourService =  13;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '4001-4500'){
        var valorService =  4005;
        var hourService =  45;
    }
    //Verificar 4501 a 5000
    else if (typeService == 'generalClean' && sizeProperty == '4501-5000'){
        var valorService =  330;
        var hourService =  11;
    }
    else if (typeService == 'deepClean' && sizeProperty == '4501-5000'){
        var valorService =  560;
        var hourService =  14;
    }
    else if (typeService == 'hoardingClean' && sizeProperty == '4501-5000'){
        var valorService =  4450;
        var hourService =  50;
    }

    if (valorService != undefined){

        var porcetagem  = (valorService*valorPorcentagem)/100;

        $("#subtotal").text('$'+valorService+'.00 ');
        $('#tip').text('$'+porcetagem+'.00');
        $('#valorTotal').text('$'+(valorService+porcetagem)+'.00');
        $(valorPaypal).text(porcetagem);
        // chamarPaypal(porcetagem);
    }

 }
