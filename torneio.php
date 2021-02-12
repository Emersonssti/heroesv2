<?php include "header.php"; ?>
<style>
th{color:black;}

</style>
<? $id_torneio = $_GET["torneio"];


$sql = $db_heroes->prepare("SELECT
	ID_TORNEIO,
	NOME,
	IMG_TH,
	ID_REGRAS,
	ID_PREMIACAO,
	TH,
	ID_AGENDA,
	ID_BRACKET,
	ID_STATUS
FROM torneio
WHERE ID_TORNEIO = '".$id_torneio."'");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_NUM);

?>

	<!-- Content
		================================================== -->
		<main class="site-content player-info-page" id="wrapper">
			<div class="container container--large">
				<div class="team-carousel">
					<div class="team-carousel__content">

<!--  Regras -->
<? 
//Se o status for em breve ou inscrições não deverá exibir o ranking
if($result[8] != 1 && $result[8] != 4){ ?>

<div class="team-carousel__item" data-icon="achievements">
	<div class="row">
		<div class="col-lg-6">
			<h2 class="player-info-title h1">Ranking</h2>

				<a data-toggle="modal" data-target="#ranking" class="btn btn-secondary">Abrir Ranking</a>
		
		</div>
	</div>
</div>
<?}?>
<!-- /// Regras /// -->



<!--  Regras -->
<div class="team-carousel__item" data-icon="joystick">
	<div class="row">
		<div class="col-lg-6">
			<h2 class="player-info-title h1">Regras</h2>

			<a data-toggle="modal" data-target="#regras" class="btn btn-secondary">Abrir Regras</a>
		
		</div>
	</div>
</div>
<!-- /// Regras /// -->

	
<!-- Premiação -->
<div class="team-carousel__item" data-icon="medal" >
	<div class="row">
		<div class="col-lg-6">
			<h2 class="player-info-title text-uppercase">Prêmios</h2>
					<?
						$sql_premio = "SELECT
							DESCRICAO1,
							DESCRICAO2
						FROM premiacao_detalhe
						WHERE ID_PREMIACAO = '".$result[3]."'";
						foreach ($db_heroes->query($sql_premio) as $result_premio){ 
					?>
						<h3 class="player-info-subtitle h4 text-uppercase"><?= $result_premio[0];?></h3>
						<p><?= $result_premio[1];?></p>
			<?}?>
		</div>
	</div>
</div>
<!-- /// Premiação /// -->
		

<!-- Agenda -->
<div class="team-carousel__item" data-icon="stopwatch">
	<div class="row">
		<div class="col-lg-6">
			<h2 class="player-info-title text-uppercase">Agenda</h2>
			<?
			$sql_premio = "SELECT
				DESCRICAO1,
				DESCRICAO2
			FROM agenda_detalhe
			WHERE ID_AGENDA = '".$result[6]."'";
			foreach ($db_heroes->query($sql_premio) as $result_premio){ 
			?>
				<h3 class="player-info-subtitle h4 text-uppercase"><?= $result_premio[0];?></h3>
				<p><?= $result_premio[1];?></p>
			<?}?>
		</div>
	</div>
</div>
<!-- /// Agenda /// -->
		


<!-- Participantes -->
<div class="team-carousel__item" data-icon="deaths">
		<div class="row">
				<div class="col-lg-6">
					<h2 class="player-info-title h1">Participantes</h2>

					<a data-toggle="modal" data-target="#participantes" class="btn btn-secondary">Lista de participantes</a>
				
				</div>
		</div>
</div>
<!-- /// Participantes /// -->


<?if($result[8] == 1){?>

<!-- Inscrições -->
<div class="team-carousel__item" data-icon="hardware">
	<div class="row">
		<div class="col-lg-6">
			<h2 class="player-info-title text-uppercase">Inscrições</h2>
			<a data-toggle="modal" data-target="#inscricao" class="btn btn-secondary">Clique para se inscrever</a>
			<input type="hidden" id="cv" value="<?= $result[5];?>">
			<input type="hidden" id="id_torneio" value="<?= $result[0];?>">
		</div>
	</div>
</div>
<!-- /// Inscrições /// -->

<?}?>
<!-- Braket -->
<div class="team-carousel__item" data-icon="overview">
	<div class="row">
	<div class="col-lg-6">
		<h2 class="player-info-title text-uppercase">Bracket</h2>
			
		<a href="#<?//= $result[7];?>" class="btn btn-secondary indisponivel">Bracket Online</a>

	</div>
	</div>
</div>
<!-- /// Bracket /// -->
		
					</div>
				</div>
				<div class="team-player">
					<div class="team-player__photo">
						<img src="assets/img/<?= $result[2];?>" alt="">
					</div>
					<div class="team-player__base">
						<!-- Decoration -->
						<div class="ncr-page-decor ncr-page-decor--color-1">
							<div class="ncr-page-decor__layer-1">
								<div class="ncr-page-decor__layer-bg"></div>
							</div>
							<div class="ncr-page-decor__layer-2"></div>
							<div class="ncr-page-decor__layer-3">
								<div class="ncr-page-decor__layer-bg"></div>
							</div>
							<div class="ncr-page-decor__layer-4"></div>
							<div class="ncr-page-decor__layer-5"></div>
						</div>
						<!-- Decoration / End -->
					</div>
				</div>
			</div>
		</main>


<!-- MODAIS ///////////////////// -->



<!-- Modal regras -->
<div class="modal fade" id="regras" tabindex="-1" role="dialog" aria-labelledby="regras" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="regras">Regras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
	  <?
	 	$sql_ = "SELECT
		 	SUBTITULO,
			TEXTO
		 FROM regras_detalhe
		 WHERE ID_REGRA = '".$result[3]."'";
		 foreach ($db_heroes->query($sql_) as $result_){ 
	  ?>
		<h6><?= $result_[0]; ?></h6>
		<p><?= $result_[1];?></p>

		<?}?>
      </div>

    </div>
  </div>
</div>
<!-- /// Modal regras ///-->

<!-- Modal participantes -->
<div class="modal fade" id="participantes" tabindex="-1" role="dialog" aria-labelledby="participantes" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="participantes">Participantes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="max-height:300px;
    overflow-x:auto;">
		
	  <?
	 	$sql_torneio = "SELECT
		 	NOME,
			TAG_VILA,
			NOME_VILA
		 FROM inscricao
		 WHERE ID_TORNEIO = '".$id_torneio."'";
		 foreach ($db_heroes->query($sql_torneio) as $result_torneio){ 
	  ?>
		<p><?= $result_torneio[1].' - '.$result_torneio[0];?></p>

		<?}?>
      </div>

    </div>
  </div>
</div>
<!-- /// Modal participantes ///-->

<!-- Modal inscrições -->
<div class="modal fade" id="ranking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ranking">Ranking <?=$result[1];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="col-md-12">

		<div class="table-responsive mt-sm-auto mb-sm-auto">
					<table class="table matches-table standings-table">
						<thead>
							<tr>
								<th></th>
								<th style="color: black;">Player</th>
								<th>Vitórias</th>
								<th>Estrelas</th>
								<th>%</th>
							</tr>
						</thead>
						<tbody>

						<?
							$sql_ranking = "SELECT
								NOME_VILA,
								NOME_JOGADOR,
								VITORIA,
								ESTRELA,
								PORCENTAGEM
							FROM ranking
							WHERE ID_TORNEIO = '".$id_torneio."' ORDER BY VITORIA, ESTRELA, PORCENTAGEM";
							foreach ($db_heroes->query($sql_ranking) as $result_ranking){ 
						?>

							<tr>
								<td>1</td>
							<td class="standings-table__team">
									<figure class="match-team" role="group">
										
										<figcaption>
											<div class="match-team__name"><?=  $result_ranking[0];?></div>
												<div class="match-team__country "><?=  $result_ranking[1];?></div>
										</figcaption>
									</figure>
								</td>
								<td><?=  $result_ranking[2];?></td>
								<td class="standings-table__wins"><?=  $result_ranking[3];?></td>
								<td class="standings-table__losses"><?=  $result_ranking[4];?>%</td>
							</tr>

							<?}?>
						</tbody>
					</table>
				</div>
			</div>
	  </div>
	  
      <div class="modal-footer">
		  .
      </div>
    </div>
  </div>
</div>


<!-- Modal inscrições -->
<div class="modal fade" id="inscricao" tabindex="-1" role="dialog" aria-labelledby="inscricao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inscricao">Incrição</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="col-md-12">

				<div class="form-group">
					<input type="text" class="form-control" id="nome" placeholder="Nome (seu nome)*">
				</div>

				<div class="form-group" id="div_tag">
					<input type="text" class="form-control" id="tag_vila" placeholder="#Tag vila*:">
				</div>

				<div class="form-group" id="div_tag_" style="display:none">
					<h6 id="nome_vila"></h6>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="email" placeholder="Email*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="nome_discord" placeholder="Nome Discord*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="tag_discord" placeholder="Tag Discord*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Ex.: dd/mm/aaaa"  maxlength="10" onkeypress="mascaraData(this)" />
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="twitter" placeholder="Twitter">
				</div>

				<button class="btn btn-primary btn-block register-form__button" id="aplicar">Aplicar!</button>

			</div>
	  </div>
	  
      <div class="modal-footer">
		  .
      </div>
    </div>
  </div>
</div>




<!-- ///////////////// MODAIS -->
<? include "footer.php"; ?>
		