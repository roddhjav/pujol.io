<?php
	require "../app/config.php";
	require "../app/visits.php";
	$visit = new Visits();
	
	require "../app/templates/header.php";
?>
			<!-- Nav -->
			<nav id="nav">
				<a href="#home" class="icon fa-cogs active"><span>Admin</span></a>
				<a href="#contents" class="icon fa-empire"><span>Contents</span></a>
				<a href="#visits" class="icon fa-users"><span>Visits</span></a>
				<a href="/" class="icon fa-home"><span>pujol.io</span></a>
			</nav>

			<!-- Main -->
			<div id="main">
				
				<!-- Home -->
				<article id="home" class="panel">
					<header>
						<h1>Admin</h1>
						<p>
							Admin part of <a href="https://pujol.io/">https://pujol.io</a>
						</p>
					</header>
				</article>
				
				<!-- Contents -->
				<article id="contents" class="panel">
					<header>
						<h1>Server contents</h1>
					</header>
					<section>
						<div class="logos">
							<ul>
								<li><a href="https://pujol.io" class="icon fa fa-bars fa-2x"></a>www.pujol.io</li>
								<li><a href="https://pujol.io/admin" class="icon fa fa-lock fa-2x"></a>pujol.io/admin</li>
								<li><a href="https://beta.pujol.io" class="icon fa fa-code fa-2x"></a>beta.pujol.io</li>
								<li><a href="https://gitlab.pujol.io" class="icon fa fa-git fa-2x"></a>gitlab.pujol.io</li>
								<li><a href="https://imap.pujol.io" class="icon fa fa-at fa-2x"></a>imap.pujol.io</li>
								<li><a href="https://mail.pujol.io" class="icon fa fa-envelope fa-2x"></a>mail.pujol.io</li>
								<li><a href="https://irc.pujol.io" class="icon fa fa-comments-o fa-2x"></a>irc.pujol.io</li>
								<li><a href="https://mysql.pujol.io" class="icon fa fa-database fa-2x"></a>mysql.pujol.io</li>
								<li><a href="https://vpn.pujol.io" class="icon fa fa-key fa-2x"></a>vpn.pujol.io</li>
								<li><a href="https://mcc.pujol.io" class="icon fa fa-play-circle-o  fa-2x"></a>mcc.pujol.io</li>
								<li><a href="https://cloud.pujol.io" class="icon fa fa-cloud fa-2x"></a>cloud.pujol.io</li>
							</ul>
						</div>
					</section>
				</article>
				
				<!-- Visits -->
				<article id="visits" class="panel">
					<header>
						<h1>Visits</h1>
						<p>Visits from <a href="https://pujol.io/">https://pujol.io</a></p>
					</header>
					<section>
						<?php $visit->printVisits(); ?>
					</section>
				</article>

			</div>
<?php
	require "../app/templates/foot.php";
?>