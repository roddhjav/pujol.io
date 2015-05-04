<?php
	require "app/config.php";
	require "app/templates/header.php";
?>
			<!-- Nav -->
			<nav id="nav">
				<a href="#home" class="icon fa-exclamation-triangle active"><span>404</span></a>
				<a href="/" class="icon fa-home"><span>pujol.io</span></a>
			</nav>

			<!-- Main -->
			<div id="main">
				<!-- Home -->
				<article id="home" class="panel">
					<header>
						<h1>Page not found</h1>
						<p>Sorry but the page you are looking for cannot be found</p>
					</header>
				</article>
			</div>
<?php
	require "app/templates/foot.php";
?>