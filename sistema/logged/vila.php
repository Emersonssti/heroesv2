<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6">
                  <h3>VILAS CADASTRADAS</h3>
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
                            <th>Nome Vila</th>
                            <th>TH</th>
                            <th>Tag Vila</th>
                            <th></th>
                        </thead>
                        <tbody>
                       <? $sql_jogador = "SELECT 
                       vila.NOME_VILA, 
                       vila.TH, 
                       vila.TAG_VILA,
                       jogador.NOME 
                       FROM vila
                       LEFT JOIN jogador_vila ON jogador_vila.ID_VILA = vila.ID_VILA
                       LEFT JOIN jogador ON jogador.ID_JOGADOR = jogador_vila.ID_JOGADOR
                       ";
                        foreach ($db_heroes->query($sql_jogador) as $result_jogador){ 
                          ?>
                          
                          <tr>
                            <td><? echo $result_jogador[0];?></td>
                            <td><? echo $result_jogador[1];?></td>
                            <td><? echo $result_jogador[2];?></td>
                            <td><? echo $result_jogador[3];?></td>
                          </tr>
<? } ?>
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