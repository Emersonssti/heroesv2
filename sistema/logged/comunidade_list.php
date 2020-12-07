<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>Comunidade</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="comunidade_forms.php"><span class="fa fa-plus"></span> Post</a></div>
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
                            <th>ID POSTAGEM</th>
                            <th>TÍTULO</th>
                            <th>USUÁRIO</th>
                            <th>DATA</th>
                            <th>AÇÃO</th>
                          </tr>
                        </thead>
                        <tbody>

                       <? $sql_assista = "SELECT
                        comunidade.ID_POST,
                        comunidade.TITULO,
                        comunidade.USER,
                        DATE_FORMAT(comunidade.DATA, '%d/%m/%Y')
                        FROM comunidade";
                        foreach ($db_heroes->query($sql_assista) as $result_assista){ 

                          $sql_user= $db_confi->prepare("SELECT NOME FROM usuario WHERE ID_USUARIO = '".$result_assista[2]."' ");
                          $sql_user->execute();
                          $row_user = $sql_user->fetch(PDO::FETCH_NUM);
                          ?>
                          
                          
                          <tr id="tr_comunidade_<? echo $result_assista[0]; ?>">
                            <td><? echo $result_assista[0];?></td>
                            <td><? echo $result_assista[1];?></td>
                            <td><? echo $row_user[0];?></td>
                            <td><? echo $result_assista[3];?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='comunidade_forms.php?id_comunidade=<? echo $result_assista[0]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                              <!--EXCLUIR-->
                              <button type="button" title="Excluir" class="btn btn-sm btn-icon" id="btexclui_comunidade<? echo $result_assista[0]; ?>" onclick="Excluir_Comunidade('<? echo $result_assista[0]; ?>');" >
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
    

    <? include "footer.php"; ?>