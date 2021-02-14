
/////////////////
$("#sair").click(function(){


       $.ajax({url: "config/sair.php?sair=1",cache: false}).done(function(txtstatus) {
          
        if(txtstatus == 0){
            location.replace("../index.php");
        }
        
       });
});  


    /////////////////
$("#gravar_torneio").click(function(){
    var ID_TORNEIO = $('#id_torneio').val();
    var NOME = $('#torneio_nome').val();
    var TH = $('#torneio_th').val();

    var ID_TEMPORADA = $('#id_temporada').val();
    var ID_REGRAS = $('#id_regras').val();
    var ID_PREMIACAO = $('#id_premiacao').val();
    var ID_AGENDA = $('#id_agenda').val();
    var LINK_BRACKET = $('#link_bracket').val();
    var ID_STATUS = $('#id_status').val();
 
   

    $.ajax({ url:'torneio_grava.php?nome=' + NOME + '&th=' + TH + '&id_temporada=' + ID_TEMPORADA+ '&id_torneio=' + ID_TORNEIO + '&id_regras=' + ID_REGRAS+ '&id_premiacao=' + ID_PREMIACAO+ '&id_agenda=' + ID_AGENDA + '&link_bracket=' + LINK_BRACKET + '&id_status=' + ID_STATUS+'&insert=1', cache: false }).done(function (txtstatus) {
 
    console.log(txtstatus);
     
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Torneio criado com sucesso!")
        .then((willDelete) => {
            if (willDelete) {
                location.replace("../logged/torneio_list.php");
            }
        })

       }else if( txtstatus == 2){
        swal("Registro Alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/torneio_list.php");
        },delay);
       }
       
   
    })
 });  

///////////////// Grava Notícia
$("#gravar_noticia").click(function(){
    var ID_NOTICIA = $('#id_noticia').val();

    var TITULO = $('#titulo').val();
    var DATA = $('#data').val();
    var FONTE = $('#fonte').val();
    var URL_FOTO = $('#url_foto').val();
    var URL_FONTE = $('#url_fonte').val();
    var TIPO = $('#tipo').val();
    var TEMA = $('#tema').val();
    var RESUMO = $('#resumo').val();
    

    $.ajax({ url:'noticias_grava.php?titulo=' + TITULO + '&data=' + DATA + '&fonte=' + FONTE + '&url_foto=' + URL_FOTO+ '&url_fonte=' + URL_FONTE + '&id_noticia=' + ID_NOTICIA+ '&tipo=' + TIPO + '&tema=' + TEMA+ '&resumo=' + RESUMO, cache: false }).done(function (txtstatus) {
 
    
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Notícia criada com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/noticias_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro Alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/noticias_list.php");
        },delay);
       }
       
   
    })
 });  

 
// ///////////////// Grava Classificatoria
// $("#gravar_classificatoria").click(function(){

//     var ID_CLASSIFICATORIA = $('#id_classificatoria').val();
//     var NOME = $('#classificatoria_nome').val();
//     var TORNEIO = $('#classificatoria_torneio').val();
//     var DATA = $('#classificatoria_data').val();
//     var ID_STATUS = $('#classificatoria_status').val();

//     $.ajax({ url:'classificatoria_grava.php?id_classificatoria=' + ID_CLASSIFICATORIA + '&nome=' + NOME + '&torneio=' + TORNEIO + '&data=' + DATA+ '&id_status=' + ID_STATUS, cache: false }).done(function (txtstatus) {
     
//        if(txtstatus == 0){
//         swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

//        }else if( txtstatus == 1){

//         swal("Registro gravado com sucesso!");
//         var delay=2000; //1 seconds
//         setTimeout(function(){
//             location.replace("../logged/classificatoria_list.php");
//         },delay);

//        }else if( txtstatus == 2){
//         swal("Registro alterado com sucesso!");
//         var delay=2000; //1 seconds
//         setTimeout(function(){
//             location.replace("../logged/classificatoria_list.php");
//         },delay);
//        }
       
   
//     })
//  });  





 
 //Excluir Noticia
 function Excluir_Noticia(id) {

    var ID_NOTICIA = id;

    $.ajax({ url: 'noticias_excluir.php?id_noticia=' + ID_NOTICIA, cache: false }).done(function (txtinativa) {


        if (txtinativa == 1) {

            swal("Erro ao deletar o registro, por favor, contate o Suporte!", '', 'error');


        } else {
            $("#tr_noticia_" + ID_NOTICIA).fadeOut();
        }
    });
}


///////////////// Grava Assista
$("#gravar_assista").click(function(){
    var ID_ASSISTA = $('#id_assista').val();

    var TITULO = $('#titulo').val();
    var CANAL = $('#canal').val();
    var URL = $('#url_video').val();
   
    $.ajax({ url:'assista_grava.php?titulo=' + TITULO + '&canal=' + CANAL+ '&url=' + URL + '&id_assista=' + ID_ASSISTA, cache: false }).done(function (txtstatus) {
 
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Registro criado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/assista_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro Alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/assista_list.php");
        },delay);
       }
       
   
    })
 });  

  //Excluir Assista
  function Excluir_Assista(id) {
    var ID_ASSISTA = id;

    $.ajax({ url: 'assista_excluir.php?id_assista=' + ID_ASSISTA, cache: false }).done(function (txtinativa) {


        if (txtinativa == 1) {

            swal("Erro ao deletar o registro, por favor, contate o Suporte!", '', 'error');

        } else {
            $("#tr_assista_" + ID_ASSISTA).fadeOut();
        }
    });
}


///////////////// Grava Comunidade
$("#gravar_comunidade").click(function(){
    var ID_COMUNIDADE = $('#id_comunidade').val();
    var TITULO = $('#titulo').val();
    var TEXTO = $('#texto').val();
    var URL = $('#url_foto').val();
   
    $.ajax({ url:'comunidade_grava.php?titulo=' + TITULO + '&texto=' + TEXTO+ '&url=' + URL + '&id_comunidade=' + ID_COMUNIDADE, cache: false }).done(function (txtstatus) {
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Registro criado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/comunidade_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/comunidade_list.php");
        },delay);
       }
       
   
    })
 });  

  //Excluir Comunidade
  function Excluir_Comunidade(id) {

    $.ajax({ url: 'comunidade_excluir.php?id=' + id, cache: false }).done(function (txtinativa) {


        if (txtinativa == 1) {

            swal("Erro ao deletar o registro, por favor, contate o suporte!", '', 'error');

        } else {
            $("#tr_comunidade_" + id).fadeOut();
        }
    });
}

//Grava agenda
function GravaAgenda(id,coluna) {

if(coluna == 'DESCRICAO1'){
    var dado = $("#desc1_" + id).val();
}else if (coluna == 'DESCRICAO2') {
    var dado = $("#desc2_" + id).val();
    
}
    $.ajax({ url:'torneio_grava.php?id=' + id + '&coluna=' + coluna + '&dado=' + dado + '&insert=2', cache: false }).done(function (txtstatus) {
        
        if(txtstatus == 0){
            swal("Erro inserir o registro!", '', 'error');
        }
        
    
     })

}

//Grava premiação
function GravaPremiacao(id,coluna) {

    if(coluna == 'DESCRICAO1'){
        var dado = $("#desc1p_" + id).val();
    }else if (coluna == 'DESCRICAO2') {
        var dado = $("#desc2p_" + id).val(); 
    }
        $.ajax({ url:'torneio_grava.php?id=' + id + '&coluna=' + coluna + '&dado=' + dado + '&insert=3', cache: false }).done(function (txtstatus) {
            
            if(txtstatus == 0){
                swal("Erro inserir o registro!", '', 'error');
            }
            
        
         })
    
    }

//Grava regra
function GravaRegra(id,coluna) {

    if(coluna == 'SUBTITULO'){
        var dado = $("#sub_" + id).val();
    }else if (coluna == 'TEXTO') {
        var dado = $("#tex_" + id).val(); 
    }
        $.ajax({ url:'torneio_grava.php?id=' + id + '&coluna=' + coluna + '&dado=' + dado + '&insert=4', cache: false }).done(function (txtstatus) {
            
            console.log(txtstatus);
            if(txtstatus == 0){
                swal("Erro inserir o registro!", '', 'error');
            }
            
        
         })
    
    }

    //Grava premiação
function GravaRanking(id,coluna) {

    if(coluna == 'VITORIA'){
        var dado = $("#vitoria_" + id).val();
    }else if (coluna == 'ESTRELA') {
        var dado = $("#estrela_" + id).val(); 
    }else if (coluna == 'PORCENTAGEM') {
        var dado = $("#porcentagem_" + id).val(); 
    }

        $.ajax({ url:'torneio_grava.php?id=' + id + '&coluna=' + coluna + '&dado=' + dado + '&insert=5', cache: false }).done(function (txtstatus) {
            
            if(txtstatus == 0){
                swal("Erro inserir o registro!", '', 'error');
            }
            
        
         })
    
    }

