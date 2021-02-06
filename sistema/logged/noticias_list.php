<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>Notícias</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="noticias_forms.php"><span class="fa fa-plus"></span> Notícia</a></div>
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
                    <div class="table-responsive" id="tabela">
                      <table class="stripe" id="example-style-8">
                        <thead>
                          <tr>
                            <th width="20%">Data</th>
                            <th width="40%">Título</th>
                            <th width="25%">Fonte</th>
                            <th width="15%">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                       <? $sql_noticia = "SELECT
                        DATE_FORMAT(noticia.DATA_POSTAGEM, '%d/%m/%Y'),
                        noticia.TITULO,
                        noticia.NOME_GERADOR,
                        noticia.ID_NOTICIA
                        FROM noticia";
                        foreach ($db_heroes->query($sql_noticia) as $result_noticia){ 
                          ?>
                          
                          <tr id="tr_noticia_<?= $result_noticia[3]; ?>">
                            <td><?= $result_noticia[0]?></td>
                            <td><?= $result_noticia[1]?></td>
                            <td><?= $result_noticia[2]?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='noticias_forms.php?id_noticia=<?= $result_noticia[3]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                              <!--EXCLUIR-->
                              <button type="button" title="Excluir" class="btn btn-sm btn-icon" id="btexclui_noticia<?= $result_noticia[3]; ?>" onclick="Excluir_Noticia('<?= $result_noticia[3]; ?>');" >
                                <span><i class="fa fa-trash fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                            </td>
                      </tr>
<? } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
    
<script>
    $(document).ready(function() {
    $('#example-style-8').DataTable({
      destroy: true,
      columnDefs: [{
          'visible': true,
          'targets': [0]
        },
        {
          type: 'date-br',
          'targets': [0]
        }
      ],
      order: [
        [0, 'desc']
      ]
    });
  });
</script>
    <? include "footer.php"; ?>