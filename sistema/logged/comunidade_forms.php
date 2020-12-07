<? include "header.php"; ?>

<?  include "comunidade_select.php";?>
<style>input{ text-transform: none !important;}</style>
    <input type="hidden" id="id_comunidade" value="<? echo $id_comunidade;  ?>" />

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CADASTRO DE POSTAGEM</h3>
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
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Título</label>
                          <input class="form-control" id="titulo" value="<? echo $titulo;?>" maxlength="50" type="text">
                      </div>
                  </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Texto</label>
                          <textarea class="form-control" rows="5" cols="5" id="texto"><? echo $texto; ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label> URL Foto</label>
                          <input class="form-control" id="url_foto"  value="<? echo $link_foto; ?>" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group" style="float:right;">
                        <a href="comunidade_list.php"> <button   class="btn btn-danger">Cancelar</button> </a>
                        <button id="gravar_comunidade" class="btn btn-success">Salvar</button>
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