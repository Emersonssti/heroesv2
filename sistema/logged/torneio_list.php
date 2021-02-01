<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>TORNEIOS CADASTRADOS</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="torneio_forms.php"><span class="fa fa-plus"></span> Torneio</a></div>
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
                            <th>Temporada</th>
                            <th>TH</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                       <? $sql_torneio = "SELECT
                       torneio.ID_TEMPORADA,
                       torneio.TH,
                       torneio.NOME,
                       status_torneio.DESCRICAO,
                       torneio.ID_TORNEIO
                        FROM torneio
                        INNER JOIN status_torneio ON status_torneio.ID_STATUS = torneio.ID_STATUS";
                        foreach ($db_heroes->query($sql_torneio) as $result_torneio){ 
                          ?>

                          <? include "torneio_inscricoes.php"?>
                          
                          <tr>
                            <td><? echo $result_torneio[0]?></td>
                            <td><? echo $result_torneio[1]?></td>
                            <td><? echo $result_torneio[2]?></td>
                            <td><? echo $result_torneio[3]?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='torneio_forms.php?id_torneio=<? echo $result_torneio[4]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                              <!--INSCRIÇÕES-->
                              <button type="button" data-toggle="modal" data-target=".torneio_inscricoes_<? echo $result_torneio[4]; ?>" title="Inscrições" class="btn btn-sm btn-icon" >
                                <span><i class="fa fa-child fa-2x" style="color:#51bb25 "  aria-hidden="true"></i></span>
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