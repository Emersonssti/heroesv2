
              
        <div class="modal fade premiacao_<? echo $result_torneio[6]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Premiação <? echo $result_torneio[2]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">

                                    <? $sql = "SELECT 
                                    ID_PREMIACAO_DETALHE,
                                    DESCRICAO1,
                                    DESCRICAO2
                                    FROM premiacao_detalhe
                                      WHERE ID_PREMIACAO = '".$result_torneio[6]."' ORDER BY SEQ";
                                      foreach ($db_heroes->query($sql) as $result){ 
                                    ?>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input class="form-control" id="desc1p_<?= $result[0];?>" onblur="GravaPremiacao(<?= $result[0];?>, 'DESCRICAO1')" value="<?= $result[1];?>" type="text">
                                                </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input class="form-control" id="desc2p_<?= $result[0];?>" onblur="GravaPremiacao(<?= $result[0];?>, 'DESCRICAO2')" id="DESCRICAO2_<?= $result[0];?>" value="<?= $result[2];?>" type="text">
                                                </div>
                                          </div>
                                    <?}?>
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>