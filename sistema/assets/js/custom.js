$("#nome").blur(function () {
    var NOME = $("#nome").val()

    if(NOME){
        $("#nome").removeClass("is-invalid")
        $("#nome").addClass("is-valid")
    }else{
        $("#nome").removeClass("is-valid")
        $("#nome").addClass("is-invalid")
    }
    })

$("#email").blur(function () {
    var EMAIL = $("#email").val()
    
    if(EMAIL){
        $("#email").removeClass("is-invalid")
        $("#email").addClass("is-valid")
    }else{
        $("#email").removeClass("is-valid")
        $("#email").addClass("is-invalid")
    }
    })


$("#tag_cla").blur(function () {
    var TAG_CLA = $("#tag_cla").val()
    
    if(TAG_CLA){
        $("#tag_cla").removeClass("is-invalid")
        $("#tag_cla").addClass("is-valid")
    }else{
        $("#tag_cla").removeClass("is-valid")
        $("#tag_cla").addClass("is-invalid")
    }
    })

$("#usuario").blur(function () {
    var USUARIO = $("#usuario").val()
    
    if(USUARIO){
        $("#usuario").removeClass("is-invalid")
        $("#usuario").addClass("is-valid")
    }else{
        $("#usuario").removeClass("is-valid")
        $("#usuario").addClass("is-invalid")
    }
    })

$("#senha").blur(function () {
    var SENHA = $("#senha").val()
    
    if(SENHA){
        $("#senha").removeClass("is-invalid")
        $("#senha").addClass("is-valid")
    }else{
        $("#senha").removeClass("is-valid")
        $("#senha").addClass("is-invalid")
    }
    })

$("#foto").blur(function () {
    var FOTO = $("#foto").val()
    
    if(FOTO){
        $("#foto").removeClass("is-invalid")
        $("#foto").addClass("is-valid")
    }else{
        $("#foto").removeClass("is-valid")
        $("#foto").addClass("is-invalid")
    }
})


// //Validação TH13
// $("#th13").blur(function () {
//     var TH13 = $("#th13").val()

//     if(TH13 !=""){
//         $.ajax({ url:"valida_player.php?playertag=" + TH13, cache: false }).done(function (txtstatus) {
//             var RETORNO = txtstatus.split("-");
//             var VALIDA = RETORNO[0];
//             var TH = RETORNO[1];
//             var NOME = RETORNO[2];
//             if(VALIDA == 0){
//                 if(TH != 13){
                    
//                     swal('Conta Incorreta', NOME+' não é um TH13', 'error');

//                 }else{
//                 $("#th13").addClass("is-valid");
//                 $("#nome_th13").val(NOME);
    
//                 }
    
//             }
//             else{
//                 $("#nome_th13").val('');
//                 $("#nome_th13").val('');
//                 swal('TAG inválida', '#'+TH13, 'error');
                
//             }
             
//                 })
//     }else{
//         $("#th13").removeClass("is-valid");
//         $("#nome_th13").val('');
//     }
  
// })

// //Validação TH12
// $("#th12").blur(function () {
//     var TH12 = $("#th12").val()

//     if(TH12 !=""){
//         $.ajax({ url:"valida_player.php?playertag=" + TH12, cache: false }).done(function (txtstatus) {
//             var RETORNO = txtstatus.split("-");
//             var VALIDA = RETORNO[0];
//             var TH = RETORNO[1];
//             var NOME = RETORNO[2];
//             if(VALIDA == 0){
//                 if(TH != 12){
                    
//                     swal('Conta Incorreta', NOME+' não é um TH12', 'error');

//                 }else{
//                 $("#th13").addClass("is-valid");
//                 $("#nome_th12").val(NOME);
    
//                 }
    
//             }
//             else{
//                 $("#nome_th12").val('');
//                 $("#nome_th12").val('');
//                 swal('TAG inválida', '#'+TH12, 'error');
                
//             }
             
//                 })
//     }else{
//         $("#th12").removeClass("is-valid");
//         $("#nome_th12").val('');
//     }
  
// })

// //Validação TH11
// $("#th11").blur(function () {
//     var TH11 = $("#th11").val()

//     if(TH11 !=""){
//         $.ajax({ url:"valida_player.php?playertag=" + TH11, cache: false }).done(function (txtstatus) {
//             var RETORNO = txtstatus.split("-");
//             var VALIDA = RETORNO[0];
//             var TH = RETORNO[1];
//             var NOME = RETORNO[2];
//             if(VALIDA == 0){
//                 if(TH != 11){
                    
//                     swal('Conta Incorreta', NOME+' não é um TH11', 'error');

//                 }else{
//                 $("#th11").addClass("is-valid");
//                 $("#nome_th11").val(NOME);
    
//                 }
    
//             }
//             else{
//                 $("#nome_th11").val('');
//                 $("#nome_th11").val('');
//                 swal('TAG inválida', '#'+TH11, 'error');
                
//             }
             
//                 })
//     }else{
//         $("#th11").removeClass("is-valid");
//         $("#nome_th11").val('');
//     }
  
// })

// //Validação TH10
// $("#th10").blur(function () {
//     var TH10 = $("#th10").val()

//     if(TH10 !=""){
//         $.ajax({ url:"valida_player.php?playertag=" + TH10, cache: false }).done(function (txtstatus) {
//             var RETORNO = txtstatus.split("-");
//             var VALIDA = RETORNO[0];
//             var TH = RETORNO[1];
//             var NOME = RETORNO[2];
//             if(VALIDA == 0){
//                 if(TH != 10){
                    
//                     swal('Conta Incorreta', NOME+' não é um TH10', 'error');

//                 }else{
//                 $("#th10").addClass("is-valid");
//                 $("#nome_th10").val(NOME);
    
//                 }
    
//             }
//             else{
//                 $("#nome_th10").val('');
//                 $("#nome_th10").val('');
//                 swal('TAG inválida', '#'+TH10, 'error');
                
//             }
             
//                 })
//     }else{
//         $("#th10").removeClass("is-valid");
//         $("#nome_th10").val('');
//     }
  
// })

// //Validação TH9
// $("#th9").blur(function () {
//     var TH12 = $("#th9").val()

//     if(TH11 !=""){
//         $.ajax({ url:"valida_player.php?playertag=" + TH19, cache: false }).done(function (txtstatus) {
//             var RETORNO = txtstatus.split("-");
//             var VALIDA = RETORNO[0];
//             var TH = RETORNO[1];
//             var NOME = RETORNO[2];
//             if(VALIDA == 0){
//                 if(TH != 9){
                    
//                     swal('Conta Incorreta', NOME+' não é um TH9', 'error');

//                 }else{
//                 $("#th9").addClass("is-valid");
//                 $("#nome_th9").val(NOME);
    
//                 }
    
//             }
//             else{
//                 $("#nome_th9").val('');
//                 $("#nome_th9").val('');
//                 swal('TAG inválida', '#'+TH9, 'error');
                
//             }
             
//                 })
//     }else{
//         $("#th9").removeClass("is-valid");
//         $("#nome_th9").val('');
//     }
  
// })


////////////////////////////

$("#finalizar").click(function () {

    var NOME = $("#nome").val();
    var TWITTER = $("#twitter").val();
    var EMAIL = $("#email").val();
    var USUARIO = $("#usuario").val();
    var SENHA = $("#senha").val();
    var DATA_NASC = $("#data_nasc").val();
    var TH13 = $("#th13").val();
    var TH12 = $("#th12").val();
    var TH11 = $("#th11").val();
    var TH10 = $("#th10").val();
    var TH9 = $("#th9").val();
    var NOME_TH13 = $("#nome_th13").val();
    var NOME_TH12 = $("#nome_th12").val();
    var NOME_TH11 = $("#nome_th11").val();
    var NOME_TH10 = $("#nome_th10").val();
    var NOME_TH9 = $("#nome_th9").val();

    if(!NOME){
        swal('Nome Obrigatório','', 'error');
    // }else if(!EMAIL){
    //     swal('Email Obrigatório','', 'error');
    // }else if(!USUARIO){
    //     swal('Usuário Obrigatório','', 'error');
    // }else if(!SENHA){
    //     swal('Senha Obrigatória','', 'error');
    // }else if(!TH13 && !TH12 && !TH11 && !TH10 && !TH9 ){
    //     swal('Informe no mínimo um centro de vila','', 'error');

    }else{

    
    $.ajax({ url: "insert_jogador.php?nome=" + NOME + "&twitter=" + TWITTER + "&email=" + EMAIL+ "&usuario=" + USUARIO + "&senha=" + SENHA + "&data_nasc=" + DATA_NASC + "&th13=" + TH13 + "&th12=" + TH12+ "&th11=" + TH11 + "&th10=" + TH10 + "&th9=" + TH9 + "&nome_th13=" + NOME_TH13 + "&nome_th12=" + NOME_TH12 + "&nome_th11=" + NOME_TH11 + "&nome_th10=" + NOME_TH10 + "&nome_th9=" + NOME_TH9, cache: false }).done(function (txtstatus) {
 
        if(txtstatus == 0){
            swal('Erro ao realizar o seu cadastro. Contate o Suporte','', 'error');
        }else if(txtstatus == 1){
            swal('Cadastro realizado com sucesso!','', 'error');
            location.reload()
        }
    
       })
    
 
    }



})



$('#th13').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9._\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});

$('#th12').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9._\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});

$('#th11').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9._\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});

$('#th10').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9._\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});

$('#th9').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9._\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});

