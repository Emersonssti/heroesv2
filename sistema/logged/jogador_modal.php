
              
        <div class="modal fade jogador_modal_<? echo $result_jogador[6]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Vilas Cadastradas</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                          <? $sql_vila = "SELECT 
                            vila.TAG_VILA,
                            vila.NOME_VILA,
                            vila.TH
                           FROM vila
                             INNER JOIN jogador_vila ON jogador_vila.ID_VILA = vila.ID_VILA
                           WHERE jogador_vila.ID_JOGADOR = '".$result_jogador[6]."' 
                           ";
                            foreach ($db_heroes->query($sql_vila) as $result_vila){ ?>
                              
                              <div class="form-group">
                                <label class="col-form-label" for="recipient-name">TH<? echo $result_vila[2]; ?>:</label>
                                <input class="form-control" value="<? echo '#'.$result_vila[0].' - '.$result_vila[1]; ?>" type="text">
                              </div>

                              <?}?>
                          </div>
                        </div>
            </div>
        </div>