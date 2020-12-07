<? include "header.php"; ?>

<?  include "torneio_select.php";?>

    <input type="hidden" id="id_torneio" value="<? echo $id_torneio;  ?>" />

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CADASTRO DE TORNEIO</h3>
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

               <div class="row">

                  <div class="col-md-10">
                      <div class="form-group">
                          <label>Nome Torneio</label>
                          <input class="form-control" id="torneio_nome" value="<? echo $nome;?>" maxlength="50" type="text">
                      </div>
                  </div>

                  <div class="col-md-2">
                      <div class="form-group">
                          <label>Centro de Vila</label>
                          <input class="form-control" id="torneio_th" maxlength="2" value="<? echo $th;?>" type="text">
                      </div>
                    </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Descrição</label>
                          <input class="form-control" id="torneio_descricao" value="<? echo $descricao;?>" type="text">
                      </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Regras</label>
                        <textarea class="form-control" rows="5" cols="5" id="regras"><? echo $regras; ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Calendário</label>
                        <textarea class="form-control" rows="5" cols="5" id="calendario"><? echo $calendario; ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Prêmios</label>
                        <textarea class="form-control" rows="5" cols="5" id="premios"><? echo $premios; ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label>URL IMAGEM</label>
                          <input class="form-control" id="torneio_url_img" value="<? echo $url_img;?>" maxlength="255" type="text">
                      </div>
                  </div>                 

                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Início Inscrição</label>
                          <input class="form-control" id="torneio_inicio_insc" value="<? echo $inicio_inscricao;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Final Inscrição</label>
                          <input class="form-control" id="torneio_final_insc" value="<? echo $final_inscricao;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label> Classificatória</label>
                          <input class="form-control" id="torneio_classificatoria"  value="<? echo $classificatoria;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label> Fase de Grupo</label>
                          <input class="form-control" id="torneio_fase_grupo"  value="<? echo $fase_grupo;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Semifinal</label>
                          <input class="form-control" id="torneio_semifinal" value="<? echo $semifinal;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Final</label>
                          <input class="form-control" id="torneio_final" value="<? echo $final;?>" type="date">
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control " id="torneio_status">
                          <? $status = "1,2,3,4"; include "combo/combo_status.php"; ?>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Primeiro</label>
                          <select class="form-control " id="torneio_primeiro">
                            <? echo $primeiro?>
                          <? include "combo/jogador_torneio.php"; ?>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>URL Primeiro Colocado</label>
                            <input class="form-control" id="torneio_url_jogador_1" value="<? echo $url_img_1;?>" maxlength="300" type="text">
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Segundo</label>
                          <select class="form-control " id="torneio_segundo">
                          <? echo $segundo?>
                          <? include "combo/jogador_torneio.php"; ?>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>URL Segundo Colocado</label>
                            <input class="form-control" id="torneio_url_jogador_2" value="<? echo $url_img_2;?>" maxlength="300" type="text">
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Terceiro</label>
                          <select class="form-control " id="torneio_terceiro">
                          <? echo $terceiro?>
                          <? include "combo/jogador_torneio.php"; ?>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>URL Terceiro Colocado</label>
                            <input class="form-control" id="torneio_url_jogador_3" value="<? echo $url_img_3;?>" maxlength="300" type="text">
                        </div>
                    </div> 

                    <div class="col-md-12">
                      <div class="form-group" style="float:right;">
                        <a href="torneio_list.php"> <button   class="btn btn-danger">Cancelar</button> </a>
                        <button id="gravar_torneio" class="btn btn-success">Salvar</button>
                      </div>
                    </div>

                  </div>
                 

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
    

    <? include "footer.php"; ?>