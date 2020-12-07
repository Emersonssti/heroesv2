<? include "header.php"; ?>

<?  include "noticias_select.php";?>
<style>input{ text-transform: none !important;}</style>
    <input type="hidden" id="id_noticia" value="<? echo $id_noticia;  ?>" />

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>CADASTRO DE NOTÍCIAS</h3>
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
                          <label>Data</label>
                          <input class="form-control" id="data" maxlength="2" value="<? echo $data_postagem;?>" type="date">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Fonte</label>
                          <input class="form-control" id="fonte" value="<? echo $fonte;?>" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label>URL Imagem</label>
                          <input class="form-control" id="url_foto" value="<? echo $url_img;?>" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label> URL Notícia</label>
                          <input class="form-control" id="url_fonte"  value="<? echo $url_fonte;?>" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group" style="float:right;">
                        <a href="noticias_list.php"> <button   class="btn btn-danger">Cancelar</button> </a>
                        <button id="gravar_noticia" class="btn btn-success">Salvar</button>
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