<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>Notícias</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="assista_forms.php"><span class="fa fa-plus"> </span> Vídeo</a></div>
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
                            <th width="20%">Data</th>
                            <th width="25%">Canal</th>
                            <th width="40%">Título</th>
                            <th width="15%">Ação</th>
                          </tr>
                        </thead>
                        <tbody>

                       <? $sql_assista = "SELECT
                        a.ID_ASSISTA,
                        a.TITULO,
                        s.NOME_CANAL,
                        DATE_FORMAT(a.DATA,'%d/%m/%Y')
                        FROM assista a
                        LEFT JOIN streamer s ON s.ID_STREAMER = a.ID_STREAMER ORDER BY a.ID_ASSISTA" ;
                        foreach ($db_heroes->query($sql_assista) as $result_assista){ 
                          ?>
                          
                          <tr id="tr_assista_<? echo $result_assista[0]; ?>">
                            <td><?= $result_assista[3]?></td>
                            <td><? echo utf8_encode($result_assista[2]);?></td>
                            <td><? echo utf8_encode($result_assista[1]);?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='assista_forms.php?id_assista=<? echo $result_assista[0]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                              <!--EXCLUIR-->
                              <button type="button" title="Excluir" class="btn btn-sm btn-icon" id="btexclui_assista<? echo $result_assista[0]; ?>" onclick="Excluir_Assista('<? echo $result_assista[0]; ?>');" >
                                <span><i class="fa fa-trash fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
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