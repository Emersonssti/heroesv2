
              
        <div class="modal fade agenda_<? echo $result_torneio[5]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Agenda <? echo $result_torneio[2]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">

                                    <? $sql = "SELECT 
                                    ID_AGENDA_DETALHE,
                                    DESCRICAO1,
                                    DESCRICAO2
                                    FROM agenda_detalhe
                                      WHERE ID_AGENDA = '".$result_torneio[5]."' ORDER BY SEQ";
                                      foreach ($db_heroes->query($sql) as $result){ 
                                    ?>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input class="form-control" id="desc1_<?= $result[0];?>" onblur="GravaAgenda(<?= $result[0];?>, 'DESCRICAO1')" value="<?= $result[1];?>" type="text">
                                                </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input class="form-control" id="desc2_<?= $result[0];?>" onblur="GravaAgenda(<?= $result[0];?>, 'DESCRICAO2')" id="DESCRICAO2_<?= $result[0];?>" value="<?= $result[2];?>" type="text">
                                                </div>
                                          </div>
                                    <?}?>
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>