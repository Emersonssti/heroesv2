

/////////////////
$("#entrar").click(function(){

    var USUARIO = $("#usuario").val();
    var SENHA = $("#senha").val();
    
    if(!USUARIO){
        swal('Usuário obrigatório.','', 'error');
    
    }else if(!SENHA){
        swal('Senha obrigatória.','', 'error');
    
    }else{    
       $.ajax({url: "log/index.php?usuario="+USUARIO+"&senha="+SENHA,cache: false}).done(function(txtstatus) {
            
                if(txtstatus == 0)
                {
                swal('Usuário ou senha incorretos.','', 'error');
                }else
                {
                 window.parent.location.assign("logged/");
                    
               }
        
       });
    
    }
    
    
    });
    /////////////////