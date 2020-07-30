

// function calculaExtra() {
    var promocao10 = 'save10';
    var valorPromocao = promocao10;
    var valorPorcentagem = 10;


    $('#btn-cupom').click(function(){

        event.preventDefault();
       var valorCupom = $('#cupom-code').val();
        if (valorCupom == valorPromocao){

        }else{
            $('#error-cupom').show();
            setTimeout(function(){
                $('#error-cupom').hide('fast');
            }, 2000);
        }
    });



function salvaValoresExtras() {

    let valores = [] ;

    $('.card.active').each(function() {
        // valores += $(this).data('codigo');
        valores.push($(this).data('codigo'));
    });

    let valorStr = valores.toString();

    $('#input-extras').val(valorStr);

}

    $(".extra-item").click(function(){
        if ($(this).hasClass("active")){
            $(this).removeClass("active");
            salvaValoresExtras();
        }
        else  {

            $(this).addClass("active");
            salvaValoresExtras();
            // calculaValor($('#type-service').val(),  $('#size-property').val(), valorExtra);
        }
        calculaValor($('#type-service').val(), $('#size-property').val());

        // let valorExtra = $(this).data("extra");
        // calculaExtra(valorExtra, $('#size-property').val() );
    });




//  function calculaExtra(valorExtra, sizeProperty ){
//      debugger
//     if (valorExtra == 'inside-windows' && sizeProperty ==  '0-1000' ){
//         valorServiceExtra = 25;
//     }
// }



$('#type-service').change(function (){
     calculaValor ( $(this).val(), $('#size-property').val(), $(this).data("extra"));
 });

$('#size-property').change(function (){
    calculaValor ( $('#type-service').val(), $(this).val(),$(this).data("extra") );
    // calculaExtra($(this).data("extra"), $(this).val());
});





function calculaValor (typeService, sizeProperty) {




    // if (typeService == undefined || typeService == null || typeService == ''){
    //     return false;
    // }
    // if (sizeProperty == undefined || sizeProperty == null || sizeProperty == ''){
    //     return false;
    // }
    // teste = valorExtra[];
    // console.log(teste);

    // if (valorExtra == 'inside-windows'){
    //     var insideWindows = 'inside-windows';

    // }else if(valorExtra == 'inside-cabinets') {
    //     var insideCabinets = 'inside-cabinets';
    // }
    var valorService = 0 ;

    if (typeService !=  undefined && sizeProperty !=  undefined){
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





    }

    let valoresInput = $("#input-extras").val();

    valoresInput = valoresInput.split(",");

    var valorServiceExtras1 = 0;
    var valorServiceExtras2 = 0;
    var valorServiceExtras3 = 0;
    var valorServiceExtras4 = 0;
    var valorServiceExtras5 = 0;
    var valorServiceExtras6 = 0;
    var valorServiceExtras7 = 0;
    var valorServiceExtras8 = 0;
    var valorServiceExtras9 = 0;
    var valorServiceExtras10 = 0;
    var valorServiceExtras11 = 0;
    var valorServiceExtras12 = 0;
    var valorServiceExtras13 = 0;
    var valorServiceExtras14 = 0;
    var valorServiceExtras15 = 0;
    var valorServiceExtras16 = 0;
    var valorServiceExtras17 = 0;
    var valorServiceExtras18 = 0;
    var valorServiceExtras19 = 0;
    var valorServiceExtras20 = 0;
    var valorServiceExtras21 = 0;
    var valorServiceExtras22 = 0;
    var valorServiceExtras23 = 0;
    var valorServiceExtras24 = 0;
    var valorServiceExtras25 = 0;
    var valorServiceExtras26 = 0;
    var valorServiceExtras27 = 0;
    var valorServiceExtras28 = 0;
    var valorServiceExtras29 = 0;
    var valorServiceExtras30 = 0;
    var valorServiceExtras31 = 0;
    var valorServiceExtras32 = 0;
    var valorServiceExtras33 = 0;
    var valorServiceExtras34 = 0;
    var valorServiceExtras35 = 0;
    var valorServiceExtras36 = 0;
    var valorServiceExtras37 = 0;
    var valorServiceExtras38 = 0;
    var valorServiceExtras39 = 0;
    var valorServiceExtras40 = 0;
    var valorServiceExtras41 = 0;
    var valorServiceExtras42 = 0;
    var valorServiceExtras43 = 0;
    var valorServiceExtras44 = 0;
    var valorServiceExtras45 = 0;
    var valorServiceExtras46 = 0;
    var valorServiceExtras47 = 0;
    var valorServiceExtras48 = 0;
    var valorServiceExtras49 = 0;
    var valorServiceExtras50 = 0;
    var valorServiceExtras51 = 0;
    var valorServiceExtras52 = 0;
    var valorServiceExtras53 = 0;
    var valorServiceExtras54 = 0;
    var valorServiceExtras55 = 0;
    var valorServiceExtras56 = 0;
    var valorServiceExtras57 = 0;
    var valorServiceExtras58 = 0;
    var valorServiceExtras59 = 0;
    var valorServiceExtras60 = 0;



    if(sizeProperty == '0-1000'){
        // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
            valorServiceExtras1 = 25;
        }
        if (valoresInput.indexOf('2') > -1) {
            valorServiceExtras2 = 25;
        }
        if (valoresInput.indexOf('3') > -1) {
            valorServiceExtras3 = 25;
        }
        if (valoresInput.indexOf('4') > -1) {
            valorServiceExtras4 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
            valorServiceExtras5 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
            valorServiceExtras6 = 25;
        }
    }
    if(sizeProperty == '1001-1500'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras7 = 30;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras8 = 30;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras9 = 30;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras10 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras11 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras12 = 30;
        }
    }
    if(sizeProperty == '1501-2000'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras13 = 30;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras14 = 30;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras15 = 30;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras16 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras17 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras18 = 30;
        }
    }
    if(sizeProperty == '2001-2500'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras19 = 40;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras20 = 40;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras21 = 30;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras22 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras23 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras24 = 50;
        }
    }
    if(sizeProperty == '2501-3000'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras25 = 50;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras26 = 50;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras27 = 40;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras28 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras29 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras30 = 60;
        }
    }

    // Alterar valores para correto
    if(sizeProperty == '3001-3500'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras31 = 50;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras32 = 50;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras33 = 40;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras34 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras35 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras36 = 60;
        }
    }
    if(sizeProperty == '3501-4000'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras37 = 50;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras38 = 50;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras39 = 40;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras40 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras41 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras42 = 60;
        }
    }
    if(sizeProperty == '4001-4500'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras43 = 50;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras44 = 50;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras45 = 40;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras46 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras47 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras48 = 60;
        }
    }
    if(sizeProperty == '4501-5000'){
    // Metragem de 0 a 1000
        if (valoresInput.indexOf('1') > -1) {
                valorServiceExtras49 = 50;
        }
        if (valoresInput.indexOf('2') > -1) {
                valorServiceExtras50 = 50;
        }
        if (valoresInput.indexOf('3') > -1) {
                valorServiceExtras51 = 40;
        }
        if (valoresInput.indexOf('4') > -1) {
                valorServiceExtras52 = 30;
        }
        if (valoresInput.indexOf('5') > -1) {
                valorServiceExtras53 = 30;
        }
        if (valoresInput.indexOf('6') > -1) {
                valorServiceExtras54 = 60;
        }
    }

    debugger
    var valorTotalExtras = 0;
    valorTotalExtras = valorServiceExtras1 + valorServiceExtras2 + valorServiceExtras3
                        + valorServiceExtras4 + valorServiceExtras5 +  valorServiceExtras6
                        + valorServiceExtras7 + valorServiceExtras8 +  valorServiceExtras9
                        + valorServiceExtras10 + valorServiceExtras11 +  valorServiceExtras12
                        + valorServiceExtras13 + valorServiceExtras14 +  valorServiceExtras15
                        + valorServiceExtras16 + valorServiceExtras17 +  valorServiceExtras18
                        + valorServiceExtras19 + valorServiceExtras20 +  valorServiceExtras21
                        + valorServiceExtras22 + valorServiceExtras23 +  valorServiceExtras24
                        + valorServiceExtras25 + valorServiceExtras26 +  valorServiceExtras27
                        + valorServiceExtras28 + valorServiceExtras29 +  valorServiceExtras30
                        + valorServiceExtras31 + valorServiceExtras32 +  valorServiceExtras33
                        + valorServiceExtras34 + valorServiceExtras35 +  valorServiceExtras36
                        + valorServiceExtras37 + valorServiceExtras38 +  valorServiceExtras39
                        + valorServiceExtras40 + valorServiceExtras41 +  valorServiceExtras42
                        + valorServiceExtras43 + valorServiceExtras44 +  valorServiceExtras45
                        + valorServiceExtras46 + valorServiceExtras47 +  valorServiceExtras48
                        + valorServiceExtras49 + valorServiceExtras50 +  valorServiceExtras51
                        + valorServiceExtras52 + valorServiceExtras53 +  valorServiceExtras54
                        + valorServiceExtras55 + valorServiceExtras56 +  valorServiceExtras57
                        + valorServiceExtras58 + valorServiceExtras59 +  valorServiceExtras60;


    var porcetagem = 0 ;


    porcetagem  = ((valorService+valorTotalExtras)*valorPorcentagem)/100;

    var valorTotal = 0

    valorTotal =  valorService+porcetagem+valorTotalExtras;

    $("#subtotal").text('$'+valorService+'');
    $('#tip').text('$'+porcetagem+'');
    $('#valor-total').text('$'+valorTotal+'');
    $('#services-extras').text('$'+valorTotalExtras+'');


    $('#paypal-button-container').empty();

    chamarPaypal(valorTotal);


}


function chamarPaypal(valorTotal){

    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: valorTotal
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');

  //This function displays Smart Payment Buttons on your web page.
}

chamarPaypal()
