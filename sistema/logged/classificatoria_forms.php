<? include "header.php"; ?>

<?  include "classificatoria_select.php";?>

    <input type="hidden" id="id_classificatoria" value="<? echo $id_classificatoria;  ?>" />
  
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CADASTRO DE CLASSIFICATÓRIA</h3>
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

                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Nome Classificatória</label>
                          <input class="form-control" id="classificatoria_nome" value="<? echo $nome;?>" maxlength="50" type="text">
                      </div>
                  </div>

                  <div class="col-md-6">
                        <div class="form-group">
                          <label>Torneio</label>
                          <select class="form-control " id="classificatoria_torneio">
                          <? $status_torneio = '2'; include "combo/combo_torneio.php"; ?>
                          </select>
                        </div>
                    </div>                

                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Data</label>
                          <input class="form-control" id="classificatoria_data" value="<? echo $data;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control " id="classificatoria_status">
                          <? $status = '2,3'; include "combo/combo_status.php"; ?>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group" style="float:right;">
                        <a href="classificatoria_list.php"> <button class="btn btn-danger">Cancelar</button> </a>
                        <button id="gravar_classificatoria" class="btn btn-success">Salvar</button>
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