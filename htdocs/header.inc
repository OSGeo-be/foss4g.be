<h1>
					<a href="index.php"><span>FOSS</span>4G</a>
					/ <a href="index.php">State of the Map</a>
					<?php echo $lang['SITE_DATATOP']; ?>
				</h1>
				<nav id="nav">
					<ul>
						<li><?php echo ("<a href='/$language/'>".$lang['MENU_HOME']."</a>"); ?></li>
						<li>
							<a href="" class="icon fa-angle-down"><?php echo $lang['MENU_INFOS']; ?></a>
							<ul>
                                <?php /* echo "<li><a href='/$language/about'>". $lang['MENU_ABOUT']."</a></li>"; */ ?>
								<li><a href="papers_all_lang.php"><?php echo $lang['MENU_CALL3']; ?></a></li>
								<li><a href="call_all_lang.php"><?php echo $lang['MENU_CALL2']; ?></a></li>
                                <!-- li><a href="inscription.php"><?php echo $lang['MENU_REG']; ?></a></li -->
                                <!-- li><a href="programme.php"><?php echo $lang['MENU_PROGRAM']; ?></a></li -->
								<li><a href="maps.php"><?php echo $lang['MENU_MAPS']; ?></a></li>
								<!-- li><a href="sponsors.php">Sponsors</a></li -->
								<li><a href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
							</ul>
						</li>
						<li>
							<a href="" class="icon fa-angle-down"><?php echo $lang['MENU_LANG']; ?></a>
							<ul>
							<li><a href="/en/<?php echo basename($_SERVER['PHP_SELF']); ?>"><?php echo $lang['URL_NAME_1']; ?></a></li>
								<li><a href="/nl/<?php echo basename($_SERVER['PHP_SELF']); ?>"><?php echo $lang['URL_NAME_2']; ?></a></li>
								<li><a href="/fr/<?php echo basename($_SERVER['PHP_SELF']); ?>"><?php echo $lang['URL_NAME_3']; ?></a></li>
							</ul>
						</li>
						<li><a href="https://www.facebook.com/pages/Foss4g-Belgium/863691603712207" class="button icon fa-facebook default azul" title="Facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://twitter.com/foss4gbe" class="button icon fa-twitter default azulito" title="Twitter"><span class="label">Twitter</span></a></li>
					</ul>
				</nav>
		
