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

                  <div class="col-md-3">
                      <div class="form-group">
                        <label>Temporada</label>
                        <select class="form-control " id="id_temporada">
                        <? include "combo/temporada.php"; ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                        <label>Regras</label>
                        <select class="form-control " id="id_regras">
                        <? include "combo/regras.php"; ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                        <label>Premiação</label>
                        <select class="form-control " id="id_premiacao">
                        <? include "combo/premiacao.php"; ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                        <label>Agenda</label>
                        <select class="form-control " id="id_agenda">
                        <? include "combo/agenda.php"; ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-9">
                    <div class="form-group">
                        <label>Link Bracket</label>
                        <input class="form-control" id="link_bracket" value="<? echo $th;?>" type="text">
                    </div>
                  </div>             
               
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control " id="id_status">
                          <? $status = "1,2,3,4"; include "combo/combo_status.php"; ?>
                          </select>
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