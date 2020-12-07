
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
    var INICIO_INSC = $('#torneio_inicio_insc').val();
    var FINAL_INSC = $('#torneio_final_insc').val();
    var CLASSIFICATORIA = $('#torneio_classificatoria').val();
    var FASE_GRUPO = $('#torneio_fase_grupo').val();
    var SEMIFINAL = $('#torneio_semifinal').val();
    var FINAL = $('#torneio_final').val();
    var DESCRICAO = $('#torneio_descricao').val();
    var URL_IMG = $('#torneio_url_img').val();
    var STATUS = $('#torneio_status').val();
    var PRIMEIRO = $('#torneio_primeiro').val();
    var SEGUNDO = $('#torneio_segundo').val();
    var TERCEIRO = $('#torneio_terceiro').val();
    var URL_PRIMEIRO = $('#torneio_url_jogador_1').val();
    var URL_SEGUNDO = $('#torneio_url_jogador_2').val();
    var URL_TERCEIRO = $('#torneio_url_jogador_3').val();
    var REGRAS = $('#regras').val();
    var CALENDARIO = $('#calendario').val();
    var PREMIOS = $('#premios').val();
   
    $.ajax({ url:'torneio_grava.php?nome=' + NOME + '&th=' + TH + '&inicio_insc=' + INICIO_INSC + '&final_insc=' + FINAL_INSC+ '&classificatoria=' + CLASSIFICATORIA+ '&fase_grupo=' + FASE_GRUPO + '&semifinal=' + SEMIFINAL + '&final=' + FINAL + '&status=' + STATUS + '&id_torneio=' + ID_TORNEIO + '&descricao=' + DESCRICAO + '&url_img=' + URL_IMG+ '&primeiro=' + PRIMEIRO + '&segundo=' + SEGUNDO + '&terceiro=' + TERCEIRO + '&url_primeiro=' + URL_PRIMEIRO + '&url_segundo=' + URL_SEGUNDO + '&url_terceiro=' + URL_TERCEIRO + '&calendario=' + CALENDARIO + '&regras=' + REGRAS + '&premios=' + PREMIOS, cache: false }).done(function (txtstatus) {
 
     
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Torneio criado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/torneio_list.php");
        },delay);

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
   
    $.ajax({ url:'noticias_grava.php?titulo=' + TITULO + '&data=' + DATA + '&fonte=' + FONTE + '&url_foto=' + URL_FOTO+ '&url_fonte=' + URL_FONTE + '&id_noticia=' + ID_NOTICIA, cache: false }).done(function (txtstatus) {
 
    
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

 
///////////////// Grava Classificatoria
$("#gravar_classificatoria").click(function(){

    var ID_CLASSIFICATORIA = $('#id_classificatoria').val();
    var NOME = $('#classificatoria_nome').val();
    var TORNEIO = $('#classificatoria_torneio').val();
    var DATA = $('#classificatoria_data').val();
    var ID_STATUS = $('#classificatoria_status').val();

    $.ajax({ url:'classificatoria_grava.php?id_classificatoria=' + ID_CLASSIFICATORIA + '&nome=' + NOME + '&torneio=' + TORNEIO + '&data=' + DATA+ '&id_status=' + ID_STATUS, cache: false }).done(function (txtstatus) {
     
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Registro gravado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/classificatoria_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/classificatoria_list.php");
        },delay);
       }
       
   
    })
 });  





 
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
