<? include "header.php"; ?>

		<!-- Content
		================================================== -->
		<main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">Heroes Tournaments</div>
					<h1 class="page-heading__title h2">Hall of Fame</h1>
				</div>
				<div class="mt-sm-auto mb-sm-auto">
					<ul class="matches-scores__navigation js-filter">
						<?
							$sql = "SELECT
							ID_TEMPORADA
							FROM temporada
								WHERE STATUS = 'ENCERRADO'
							ORDER BY ID_TEMPORADA DESC";
							foreach ($db_heroes->query($sql) as $result){ 
						?>
						<li data-filter=".s<?=$result[0]?>"><span>Season <?=$result[0]?></span></li>
						<?}?>
					</ul>
		
					<div class="matches-scores row">

				<?
					$sql_ = "SELECT
						ID_TEMPORADA,
						LINK_IMG
					FROM hall_fama
					ORDER BY ID_TEMPORADA DESC";
					foreach ($db_heroes->query($sql_) as $result_){ 
				?>
						<div class="col-md-12 col-lg-4 s<?=$result_[0]?>" style="text-align: center;">
							<img src="<?=$result_[1]?>" width="400px" height="200px" alt="">
						</div>
					
				<?}?>
						
				
						
					</div>
				</div>
			</div>
		</main>
		

<? include "footer.php"; ?>
