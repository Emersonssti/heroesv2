
              
        <div class="modal fade regras_<? echo $result_torneio[7]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Agenda <? echo $result_torneio[2]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">

                                    <? $sql = "SELECT 
                                    ID_REGRA_DETALHE,
                                    SUBTITULO,
                                    TEXTO
                                    FROM regras_detalhe
                                      WHERE ID_REGRA = '".$result_torneio[7]."' ORDER BY SEQ";
                                      foreach ($db_heroes->query($sql) as $result){ 
                                    ?>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <input class="form-control" id="sub_<?= $result[0];?>" onblur="GravaRegra(<?= $result[0];?>, 'SUBTITULO')" value="<?= $result[1];?>" type="text">
                                                </div>
                                          </div>

                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <textarea class="form-control"  id="tex_<?= $result[0];?>" rows="3" cols="3" onblur="GravaRegra(<?= $result[0];?>, 'TEXTO')" value=""><?= $result[2];?></textarea>
                                              </div>
                                          </div>

                                    <?}?>
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>