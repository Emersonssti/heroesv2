
              
        <div class="modal fade ranking_<? echo $result_torneio[4]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Ranking <? echo $result_torneio[2]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-6"><h5>JOGADOR</h5></div>
                                  <div class="col-md-2 centraliza"><h5>VITÓRIA</h5></div>
                                  <div class="col-md-2 centraliza"><h5>ESTRELA</h5> </div>
                                  <div class="col-md-2 centraliza"><h5>%</h5></div>
<br>

                              <? 
                              $cont = 1;
                              $sql = "SELECT 
                                    ID_RANKING,
                                    TAG_VILA,
                                    NOME_VILA,
                                    NOME_JOGADOR,
                                    VITORIA,
                                    ESTRELA,
                                    PORCENTAGEM
                                    FROM ranking
                                      WHERE ID_TORNEIO = '".$result_torneio[4]."' ORDER BY VITORIA DESC, ESTRELA DESC, PORCENTAGEM DESC";
                                      foreach ($db_heroes->query($sql) as $result){ 
                                    ?>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input class="form-control" value="<?= $cont.' - '.$result[2].' ('.$result[1].')';?>" type="text">
                                              </div>
                                          </div>

                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <input class="form-control" id="vitoria_<?= $result[0];?>" onblur="GravaRanking(<?= $result[0];?>, 'VITORIA')" id="vitoria_<?= $result[0];?>" value="<?= $result[4];?>" type="text">
                                                </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <input class="form-control" id="estrela_<?= $result[0];?>" onblur="GravaRanking(<?= $result[0];?>, 'ESTRELA')" id="estrela_<?= $result[0];?>" value="<?= $result[5];?>" type="text">
                                                </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <input class="form-control" id="porcentagem_<?= $result[0];?>" onblur="GravaRanking(<?= $result[0];?>, 'PORCENTAGEM')" id="porcentagem_<?= $result[0];?>" value="<?= $result[6];?>" type="text">
                                                </div>
                                          </div>
                                    <? $cont++;}?>
                              </div>

                                    
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>