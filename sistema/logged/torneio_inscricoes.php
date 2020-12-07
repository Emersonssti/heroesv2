
              
        <div class="modal fade torneio_inscricoes_<? echo $result_torneio[6]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Inscrições <? echo $result_torneio[0]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <? $cont = 0?>
                            <? $sql_inscricao = "SELECT 
                            NOME_VILA,
                            TAG_VILA,
                            DATE_FORMAT(DATA_CADASTRO,'%d/%m/%Y')
                            FROM inscricao
                              WHERE ID_TORNEIO = '".$result_torneio[6]."' ORDER BY DATA_CADASTRO
                       ";
                        foreach ($db_heroes->query($sql_inscricao) as $result_inscricao){ 
                          $cont ++
                          ?>
                               <div class="col-md-12">
                                  <div class="form-group">
                                      <input class="form-control" disabled value="<? echo $cont; ?> - <? echo $result_inscricao[0];?> - #<? echo $result_inscricao[1];?> - <? echo $result_inscricao[2];?>  " type="text">
                                    </div>
                               </div>
                         <?}?>
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>