<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CLASSIFICATÓRIAS CADASTRADAS</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="classificatoria_forms.php"><span class="fa fa-plus"></span>Classificatória</a></div>
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
                            <th>Classificatória</th>
                            <th>Torneio</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                       <? $sql_classificatoria = "SELECT
                       classificatoria.NOME,
                       torneio.NOME,
                       DATE_FORMAT(classificatoria.DATA_CLASSIFICATORIA, '%d/%m/%Y'),
                       status_torneio.DESCRICAO,
                       classificatoria.ID_CLASSIFICATORIA
                        FROM classificatoria
                        INNER JOIN status_torneio ON status_torneio.ID_STATUS = classificatoria.ID_STATUS
                        INNER JOIN torneio ON torneio.ID_TORNEIO = classificatoria.ID_TORNEIO
                        WHERE classificatoria.ID_STATUS = 2";
                        foreach ($db_heroes->query($sql_classificatoria) as $result_classificatoria){ 
                          ?>

                          <? include "torneio_inscricoes.php"?>
                          
                          <tr>
                            <td><? echo $result_classificatoria[0]?></td>
                            <td><? echo $result_classificatoria[1]?></td>
                            <td><? echo $result_classificatoria[2]?></td>
                            <td><? echo $result_classificatoria[3]?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='classificatoria_forms.php?id_classificatoria=<? echo $result_classificatoria[4]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                              <!--CHAVE-->
                              <button type="button" title="Chave" class="btn btn-sm btn-icon" >
                                <span><i class="fa fa-bars fa-2x" style="color:#51bb25 "  aria-hidden="true"></i></span>
                              </button>
                            </td>
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