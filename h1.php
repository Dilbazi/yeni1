<?php if (isset($_REQUEST[session_name()])) session_start();
require_once 'inc/menu.php';
?><header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="admin.php"><img src="img/logo.png" alt="" title="" /> admin</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class=""><a class="active" href="index.php"> <?php echo  $lang["home"];?></a></li>
						<li><a href="about.php"><?php echo  $lang["about"];?></a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li class="menu-has-children"><a href="#">Pages</a>
							<ul>
								
								<li><a href="contact.php">Contact</a></li>
								
							</ul>
						</li>
						<li class="menu-has-children"><a href="#">Language</a>
							<ul>
								<li><a style="color:lightgreen;" href="modules/lang.php?lang=az">AZ|<a></li>
								<li><a style="color:lightgreen; \
								 " href="modules/lang.php?lang=en">EN|</a></li>
								<li> <a style="color:lightgreen;" href="modules/lang.php?lang=ru">RU</a></li>
								
							</ul>
						</li>
						
						
					</ul>
				</nav>
			</div>
		</div>
	</header>