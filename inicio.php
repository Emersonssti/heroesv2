<?php include "header.php"; ?>

<? // Select da temporada
$sql_temporada = $db_heroes->prepare("SELECT 
	ID_TEMPORADA, 
	NOME_TEMPORADA
FROM temporada 
WHERE STATUS = 'ATIVO' ");
$sql_temporada->execute();
$row_torneio = $sql_temporada->fetch(PDO::FETCH_NUM);
?>
<!-- Content
		================================================== -->
		<main class="site-content site-content--center page" id="">
			<div class="container container--large">
				<div class="page-heading page-heading--default text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Próximos Torneios</span>
					</div>
					<h1 class="page-heading__title h2"><?= $row_torneio[1];?></h1>
					<input type="hidden" value="<?= $row_torneio[0];?>">
				</div>
				<div class="row mt-sm-auto mb-sm-auto">
				<div class="col-sm-6 col-lg-1"></div>

				<? $sql = "SELECT
                        t.ID_TORNEIO,
						t.ID_STATUS,
						t.TH,
						t.IMG_TH,
						s.DESCRICAO
						FROM torneio t
							INNER JOIN status_torneio s ON s.ID_STATUS = t.ID_STATUS
						WHERE t.ID_TEMPORADA = '".$row_torneio[0]."' ORDER BY t.TH";
                        foreach ($db_heroes->query($sql) as $result){ 

							switch ($result[1]) {
								case 1:
									$cor_status = 'yellow';
									break;
								case 2:
									$cor_status = 'green';
									break;
								case 3:
									$cor_status = 'red';
									break;
								case 4:
									$cor_status = 'blue';
									break;
							}
						  ?>
						  
						  
						  <input type="hidden" id="id_torneio" value="<?= $result[0]?>">
						  <div class="col-sm-6 col-lg-2">
							<div class="team-selection-item team-selection-item--style-1 text-center">
								<!-- <a href="torneio.php?torneio=<?// echo $result[0];?>" class="team-selection-item__thumbnail"> -->
								<a class="team-selection-item__thumbnail indisponivel">
									<div class="team-selection-item__thumbnail-inner">
										<img src="assets/img/<? echo $result[3];?>" alt="">
									</div>
									<img class="team-selection-item__logo team-selection-item__logo--middle" src="assets/img/<? echo $result[3];?>" srcset="assets/img/<? echo $result[3];?> 2x" alt="">
								</a>
								<span class="team-selection-item__subtitle h6" style="color: <? echo $cor_status?>;"><? echo $result[4];?></span>
								<h2 class="team-selection-item__title">TH<? echo $result[2]?></h2>
							</div>
						</div>

						<?}?>

			
					<!-- <div class="col-sm-6 col-lg-2">
						<div class="team-selection-item team-selection-item--style-1 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="assets/img/th/th12.png" alt="">
								</div>
								<img class="team-selection-item__logo team-selection-item__logo--middle" src="assets/img/th/th12.png" srcset="assets/img/th/th12.png 2x" alt="">
							</a>
							<span class="team-selection-item__subtitle h6"  style="color: yellow;">Em Breve</span>
							<h2 class="team-selection-item__title">TH 12</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="team-selection-item team-selection-item--style-1 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="assets/img/th/th11.png" alt="">
								</div>
								<img class="team-selection-item__logo team-selection-item__logo--middle" src="assets/img/th/th11.png" srcset="assets/img/th/th11.png 2x" alt="">
							</a>
							<span class="team-selection-item__subtitle h6"  style="color: green;">Em andamento</span>
							<h2 class="team-selection-item__title">TH11</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="team-selection-item team-selection-item--style-1 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="assets/img/th/th10.png" alt="">
								</div>
								<img class="team-selection-item__logo team-selection-item__logo--middle" src="assets/img/th/th10.png" srcset="assets/img/th/th10.png 2x" alt="">
							</a>
							<span class="team-selection-item__subtitle h6"  style="color: red;">Encerrado</span>
							<h2 class="team-selection-item__title">TH 10</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="team-selection-item team-selection-item--style-1 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="assets/img/th/th9.png" alt="">
								</div>
								<img class="team-selection-item__logo team-selection-item__logo--middle" src="assets/img/th/th9.png" srcset="assets/img/th/th9.png 2x" alt="">
							</a>
							<span class="team-selection-item__subtitle h6"  style="color: yellow;">Em Breve</span>
							<h2 class="team-selection-item__title">TH 9</h2>
						</div>
					</div>
				<div class="col-sm-6 col-lg-1"></div> -->
				</div>
			</div>
		</main>
<?php include "footer.php"; ?>
		