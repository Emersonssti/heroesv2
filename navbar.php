<nav class="main-nav">
				<ul class="main-nav__list">
				
				<?//Menu Principal
					$sql_nav = "SELECT DESCRICAO, LINK, ID_NAVBAR FROM navbar ORDER BY SEQ";
					foreach ($db_confi->query($sql_nav) as $r_nav){ 
				?>
					<li><a href="<?=$r_nav[1]?>"><?=$r_nav[0]?></a>
								
								<?//SubMenu
								if($r_nav[1] == '#'){?>
									<ul class="main-nav__sub">
											<? $sql_nav_sub = "SELECT LINK, DESCRICAO FROM navbar_sub WHERE ID_NAVBAR = '".$r_nav[2]."'
											ORDER BY DESCRICAO";
											foreach ($db_confi->query($sql_nav_sub) as $r_nav_sub){?>
											<li><a href="<?=$r_nav_sub[0]?>"><span><?=$r_nav_sub[1]?></span></a></li>
									</ul>

							<?}?>
						<?}?>
					 
					</li>
							
				<?}?><!--Fim menu principal-->
				</ul>
</nav>