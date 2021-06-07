$("#desativado").click(function () {
    swal('E ae Chefe!', 'Estamos preparando uma experiência incrível para você! Em breve liberamos as novidades ;-).', 'warning');
  })

  $(".indisponivel").click(function () {
    swal('E ae Chefe!', 'Estamos preparando uma experiência incrível para você! Em breve liberamos as novidades ;-).', 'warning');
  })


  $("#andamento").click(function () {
    swal('Ops!', 'Nenhum torneio em andamento.', 'warning');
  
  })
  
  $("#comunidade").click(function () {
    swal('Ops!', 'Essa opção será habilitada em breve.', 'warning');
  
  })
  
  //Valida Tag da vila
  $("#tag_vila").blur(function () {
   
      var CV_TORNEIO = $("#cv").val();
      var TAG_VILA = $('#tag_vila').val().replace("#", "")

  
  $.ajax({ url: "valida_vila.php?tag_vila=" + TAG_VILA + "&cv_torneio=" + CV_TORNEIO, cache: false }).done(function (txtstatus) {
  
      var TAG_SPLIT = txtstatus.split("-");
      var NICK = TAG_SPLIT[1];
  
    if(txtstatus == 0){
      swal('Erro!', 'Tag Inválida.', 'error');
      $("#tag_vila").val("");
    } else if(txtstatus == 1){
      swal('Erro!', TAG_VILA+' Não corresponde a uma TAG de TH '+ CV_TORNEIO, 'error');  
        $("#tag_vila").val("");
  
    }else{
          $("#tag_vila").val(TAG_VILA);
          $("#nome_vila").html(NICK+' - '+'#'+TAG_VILA);
          $('#div_tag').css('display', 'none');
          $('#div_tag_').css('display', '');
  
    }
  
      })
      
  });
  
  //Salva Inscrição
  $("#aplicar").click(function () {
  
      var ID_TORNEIO = $("#id_torneio").val();

      var TAG_VILA = $('#tag_vila').val().replace("#", "")
      var DISCORD_TAG = $('#tag_discord').val().replace("#", "")
  
      var NOME = $("#nome").val();
      var EMAIL = $("#email").val();
      var DISCORD_NOME = $("#nome_discord").val();
      var TWITTER = $("#twitter").val();
      var DATA_NASCIMENTO = $("#data_nascimento").val();
  
      // alert(TAG_VILA);
  
      if(!TAG_VILA){
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
        $.ajax({ url: "grava_inscricao.php?id_torneio=" + ID_TORNEIO + "&nome=" + NOME + "&tag_vila=" + TAG_VILA + "&email=" + EMAIL + "&discord_nome=" + DISCORD_NOME + "&discord_tag=" + DISCORD_TAG + "&data_nascimento=" + DATA_NASCIMENTO + "&twitter=" + TWITTER, cache: false }).done(function (txtstatus) {
  
          // alert(txtstatus);

            if (txtstatus == 0) {
              swal('Erro!', 'Email já cadastrada nessa temporada.', 'error')
                  .then((willDelete) => {
                      if (willDelete) {
                          location.replace("torneio.php?torneio="+ID_TORNEIO);
                      }
                  })
    
          }
          else if(txtstatus == 1){
            swal('Erro!', 'Vila já cadastrada nessa temporada.', 'error')
            .then((willDelete) => {
                if (willDelete) {
                    location.replace("torneio.php?torneio="+ID_TORNEIO);
                }
            })
          
          }else if(txtstatus == 2){
           swal('Sucesso!', 'Cadastro realizado com sucesso! Boa sorte! ;-)', 'success')
            .then((willDelete) => {
                if (willDelete) {
                    location.replace("torneio.php?torneio="+ID_TORNEIO);
                }
            })

          }
    
        })
  
      }
  
  })

  //Máscara data
  function mascaraData(val) {
    var pass = val.value;
    var expr = /[0123456789]/;
  
    for (i = 0; i < pass.length; i++) {
      // charAt -> retorna o caractere posicionado no índice especificado
      var lchar = val.value.charAt(i);
      var nchar = val.value.charAt(i + 1);
  
      if (i == 0) {
        // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
        // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
        // instStr.search(expReg);
        if ((lchar.search(expr) != 0) || (lchar > 3)) {
          val.value = "";
        }
  
      } else if (i == 1) {
  
        if (lchar.search(expr) != 0) {
          // substring(indice1,indice2)
          // indice1, indice2 -> será usado para delimitar a string
          var tst1 = val.value.substring(0, (i));
          val.value = tst1;
          continue;
        }
  
        if ((nchar != '/') && (nchar != '')) {
          var tst1 = val.value.substring(0, (i) + 1);
  
          if (nchar.search(expr) != 0)
            var tst2 = val.value.substring(i + 2, pass.length);
          else
            var tst2 = val.value.substring(i + 1, pass.length);
  
          val.value = tst1 + '/' + tst2;
        }
  
      } else if (i == 4) {
  
        if (lchar.search(expr) != 0) {
          var tst1 = val.value.substring(0, (i));
          val.value = tst1;
          continue;
        }
  
        if ((nchar != '/') && (nchar != '')) {
          var tst1 = val.value.substring(0, (i) + 1);
  
          if (nchar.search(expr) != 0)
            var tst2 = val.value.substring(i + 2, pass.length);
          else
            var tst2 = val.value.substring(i + 1, pass.length);
  
          val.value = tst1 + '/' + tst2;
        }
      }
  
      if (i >= 6) {
        if (lchar.search(expr) != 0) {
          var tst1 = val.value.substring(0, (i));
          val.value = tst1;
        }
      }
    }
  
    if (pass.length > 10)
      val.value = val.value.substring(0, 10);
    return true;
  }