<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6">
                  <h3>JOGADORES CADASTRADOS</h3>
                </div>
              </div>
            </div>
          </div>
          


          <!-- Container-fluid starts-->
          <div class="container-fluid" >
            <div class="row">
                  <!-- Stripe styles-->
                  <div class="col-sm-12" >
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive" id="tabela">
                      <table class="stripe" id="example-style-8">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Data Cadastro</th>
                            <th>Data Nascimento</th>
                            <th>Email</th>
                            <th>Twitter</th>
                            <th>Vilas</th>
                          </tr>
                        </thead>
                        <tbody>
                       <? $sql_jogador = "SELECT NOME, DATA_CADASTRO, DATA_NASCIMENTO, EMAIL, TWITTER, ID_STATUS, ID_JOGADOR FROM jogador";
                        foreach ($db_heroes->query($sql_jogador) as $result_jogador){ 
                          ?>

                          <? include "jogador_modal.php"?>
                          
                          <tr>
                            <td><? echo $result_jogador[0];?></td>
                            <td><? echo $result_jogador[1]?></td>
                            <td><? echo $result_jogador[2]?></td>
                            <td><? echo $result_jogador[3]?></td>
                            <td><? echo $result_jogador[4]?></td>
                            <td><button class="btn btn-pill btn-success" type="button" data-toggle="modal" data-target=".jogador_modal_<? echo $result_jogador[6]; ?>" style="width:80%;">Vilas</button></td>
                          </tr>
<?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
    

    <? include "footer.php"; ?>