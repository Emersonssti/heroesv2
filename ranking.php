<? include "header.php"; 
$id = $_GET["id_temporada"]
?>

		<!-- Content
		================================================== -->
		<main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">Heroes Tournaments</div>
					<h1 class="page-heading__title h2">Ranking tEMPORADA X</h1>
				</div>
				<div class="mt-sm-auto mb-sm-auto">
					<ul class="matches-scores__navigation js-filter">
						<?
							$sql = "SELECT
								TH
							FROM torneio
								WHERE ID_TEMPORADA = ".$id."
							ORDER BY TH DESC";
							foreach ($db_heroes->query($sql) as $result){ 
						?>
						<li data-filter=".th<?= $result[0]?>"><span>TH<?= $result[0]?></span></li>
						
						<?}?>
					</ul>
		
					<div class="matches-scores row">

					<? 
						$sql = "SELECT
								TH,
								ID_TORNEIO
							FROM torneio
								WHERE ID_TEMPORADA = ".$id."
							ORDER BY TH DESC";
							foreach ($db_heroes->query($sql) as $result){ 
					?>

								<div class="col-md-12 col-lg-6 th<?= $result[0]?>" style="text-align: center;">
		
								<!---->
										<div class="table-responsive mt-sm-auto mb-sm-auto">
											<table class="table matches-table standings-table">
												<thead>
													<tr>
														<th>Pos</th>
														<th>Jogador</th>
														<th>Vit</th>
														<th>Estrelas</th>
														<th>Destruição</th>
													</tr>
												</thead>
												<tbody>
												<? $cont = 1;
													$sql_ = "SELECT
															NOME_VILA,
															NOME_JOGADOR,
															VITORIA,
															ESTRELA,
															PORCENTAGEM
														FROM ranking_ WHERE ID_TORNEIO =  ".$result[1]." ORDER BY VITORIA DESC, ESTRELA DESC, PORCENTAGEM DESC";
														foreach ($db_heroes->query($sql_) as $result_){ 
												?>

															<tr>
																<td><?= $cont?></td>
																<td class="standings-table__team">
																	<figure class="match-team" role="group">
																		<figcaption>
																			<div class="match-team__name"><?= $result_[0]?></div>
																				<div class="match-team__country "><?= $result_[1]?></div>
																		</figcaption>
																	</figure>
																</td>
																<td class="standings-table__wins"><?= $result_[2]?></td>
																<td class="standings-table__losses"><?= $result_[3]?></td>
																<td><?= $result_[4]?>%</td>
															</tr>
															<? $cont++;}?>
												</tbody>
											</table>
										</div>
								<!---->
										
								</div>
										<?}?>

										</div>


		
				</div>
			</div>
		</main>
		

<? include "footer.php"; ?>
