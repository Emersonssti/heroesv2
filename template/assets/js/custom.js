//Valida Tag da vila
$("#tag_vila").blur(function () {
 
    var TAG_VILA_ = $("#tag_vila").val();
    var CV_TORNEIO = $("#cv").val();
    var TAG_VILA_SPLIT = TAG_VILA_.split("#");
    TAG_VILA = TAG_VILA_SPLIT[1];

$.ajax({ url: "valida_vila.php?tag_vila=" + TAG_VILA + "&cv_torneio=" + CV_TORNEIO, cache: false }).done(function (txtstatus) {

    var TAG_SPLIT = txtstatus.split("-");
    var NICK = TAG_SPLIT[1];

  if(txtstatus == 0){
    swal('Erro!', 'Tag Inválida.', 'error');
    $("#tag_vila").val("");
  } else if(txtstatus == 1){
    swal('Erro!', TAG_VILA_+' Não corresponde a uma TAG de TH '+ CV_TORNEIO, 'error');  
      $("#tag_vila").val("");

  }else{
        $("#tag_vila").val(TAG_VILA+' - '+NICK);
        $('#tag_vila').prop('disabled', true);

  }
  


    })
    
});

//Salva Inscrição
$("#salvar_inscricao").click(function () {

    var ID_TORNEIO = $("#id_torneio").val();
    var TAG_VILA_ = $("#tag_vila").val();
    var TAG_VILA_SPLIT = TAG_VILA_.split("-");
    var TAG_VILA = TAG_VILA_SPLIT[0];

    var NOME_VILA = TAG_VILA_SPLIT[1];
    var NOME = $("#nome").val();
    var EMAIL = $("#email").val();
    var DISCORD_NOME = $("#nome_discord").val();

    var TAG_DISCORD_ = $("#tag_discord").val();
    var TAG_VILA_SPLIT = TAG_DISCORD_.split("#");
    var DISCORD_TAG = TAG_VILA_SPLIT[1];

    var TWITTER = $("#twitter").val();
    var DATA_NASCIMENTO = $("#data_nascimento").val();


    if(!TAG_VILA_){
      swal('Erro!', 'Informe a TAG da vila.', 'error');
    }else if(!NOME){
      swal('Erro!', 'Informe o seu nome.', 'error');
    }else if(!EMAIL){
      swal('Erro!', 'Informe o seu email.', 'error');
    }else if(!DISCORD_NOME){
      swal('Erro!', 'Informe o seu nome no Discord.', 'error');
    }else if(!DISCORD_TAG){
      swal('Erro!', 'Informe a sua TAG no discord.', 'error');
    }else if(!DATA_NASCIMENTO){
      swal('Erro!', 'Informe a sua data de nascimento.', 'error');
    }else{
      $.ajax({ url: "grava_inscricao.php?id_torneio=" + ID_TORNEIO + "&nome=" + NOME + "&tag_vila=" + TAG_VILA + "&nome_vila=" + NOME_VILA + "&email=" + EMAIL + "&discord_nome=" + DISCORD_NOME + "&discord_tag=" + DISCORD_TAG + "&data_nascimento=" + DATA_NASCIMENTO + "&twitter=" + TWITTER, cache: false }).done(function (txtstatus) {

        if(txtstatus == 0){
          swal('Erro!', 'Email já cadastrada nessa temporada.', 'error');
  
        }
        else if(txtstatus == 1){
          swal('Erro!', 'Vila já cadastrada nessa temporada.', 'error');
  
        
        }else if(txtstatus == 2){
          swal('Sucesso!', 'Cadastro realizado com sucesso! Boa sorte! ;-)', 'success');
  
        }
  
      })

    }

})