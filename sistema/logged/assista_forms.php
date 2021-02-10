<? include "header.php"; ?>

<?  include "assista_select.php";?>
<style>input{ text-transform: none !important;}</style>
    <input type="hidden" id="id_assista" value="<? echo $id_assista;  ?>" />

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CADASTRO DE VÍDEOS</h3>
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
                          <label>Título</label>
                          <input class="form-control" id="titulo" value="<? echo $titulo;?>" maxlength="50" type="text">
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                        <label>Canal</label>
                        <select class="form-control " id="canal">
                        <? include "combo/canal.php"; ?>
                        </select>
                      </div>
                  </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label> URL Vídeo</label>
                          <input class="form-control" id="url_video"  value="<? echo $url_video; ?>" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group" style="float:right;">
                        <a href="assista_list.php"> <button   class="btn btn-danger">Cancelar</button> </a>
                        <button id="gravar_assista" class="btn btn-success">Salvar</button>
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