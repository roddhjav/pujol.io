<?php
	require "app/config.php";
	require "app/visits.php";
	require "app/contact.php";
	
	$visit = new Visits();
	$visit->addVisits();
	
	$contact = new Contact();
	
	if( ! $contact->isempty() ) 
	{
		if( $contact->isfull() )
		{
			if( !$contact->isemail() ) 
			{
				echo '<script type="text/javascript">alert(\'Error, invalid email\')</script>';
			} 
			elseif( $contact->sendmail() )
			{
				echo '<script type="text/javascript">alert(\'The email has been successfully sent\')</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert(\'Error, the email has not been sent\')</script>';
			}
		} 
		else
		{
			echo '<script type="text/javascript">alert(\'Error : all fields are mandatory\')</script>';
		}
	}
	
	require "app/templates/header.php";
?>
			<!-- Nav -->
			<nav id="nav">
				<a href="#home" class="icon fa-home active"><span>Home</span></a>
				<a href="#me" class="icon fa fa-user"><span>Me</span></a>
				<a href="#work" class="icon fa fa-tasks"><span>My Work</span></a>
				<a href="#cv" class="icon fa fa-graduation-cap"><span>My CV</span></a>
				<a href="#contact" class="icon fa fa-envelope"><span>Contact</span></a>
				<a href="https://github.com/alexandrepujol" class="icon fa fa-github-square"><span>Github</span></a>
				<a href="http://fr.linkedin.com/in/alexandrepujol/en" class="icon fa-linkedin-square"><span>Linkedin</span></a>
			</nav>

			<!-- Main -->
			<div id="main">
				
				<!-- Home -->
				<article id="home" class="panel">
					<header>
						<h1>Alexandre PUJOL</h1>
						<p>Double degree student in computer science<br /> and in management</p>
					</header>
					<a href="#me" class="jumplink pic">
						<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
						<img src="images/me.png" alt="" />
					</a>
				</article>
				
				<!-- Me --> 
				<article id="me" class="panel">
					<header>
						<h2>About me</h2>
					</header>
					<p>
						My name is Alexandre PUJOL, I’m currently studying in my final year of computer science in the engineering school Polytech Marseille. In the same time, I do a Master In Management in the business school Kedge BS.
					</p>
					<p>
						Thanks to those 2 master's degrees, I acquired knowledge and competencies in two complementary fields that I am passionate about.
					</p>
					<p>
						Curious, determinated, easy-going and thirsty of knowledge, I'm seeking a 6 months internship in computer security , embedded systems or software engineering.
					</p>

					<div class="logos">
						<a href="https://github.com/alexandrepujol" class="icon fa fa-github-square fa-3x"></a>
						<a href="https://gitlab.pujol.io" class="icon fa fa-git-square fa-3x"></a>
						<a href="http://fr.linkedin.com/in/alexandrepujol/en" class="icon fa fa-linkedin-square fa-3x"></a>
					</div>
					


				</article>
					
				<!-- My Work --> 
				<article id="work" class="panel">
					<header>
						<h2>My Work</h2>
						Some of my worthy projects
					</header>
					<section>
						<div class="row">
							<div class="10u">
								<h3>Intership : Software Engineer, Embedded systems, porting software</h3>
								<p>
									Wyplay (Marseille France 10M€, 160 persons) is a company that creates middleware software and hardware solutions for Set top box. I worked on "Frog" an open source Linux kernel-based middleware platform for pay-TV operator.<br/>
									My intership goals was : Porting software of "Frog" to an x86 architecture. This means software middleware porting and Hardware video decodage.<br/>

									Tools:<br/>
									• Gentoo Linux, Gentoo tools (portage, emerge, ebuild...)<br/>
									• C, Bash, Python<br/>
									• git, FFMPEG, DirectFB, OpenGl<br/>
									• Virtual Machine (Vmware, virtualbox)<br/>

									Skills : Gentoo Linux, C, bash, Embedded systems, git, Vmware.<br/>
								</p>
							</div>
							<div class="2u">
								<a href="http://www.wyplay.com/" class="image fit"><img src="images/wyplay.png" alt="wyplay"></a>
							</div>
						</div>
						<div class="row">
							<div class="10u">
								<h4>Anonymizing data system on a pharmacy network</h4>
								<p>
									Anonymity guaranteed by:<br/>
									• Using a TOR private network with the pharmacy<br/>
									• A trusted server ensuring anonymity.<br/>
									• Two ciphers: Probabilistic (El-Gamal) and deterministic (on the trusted server).<br/>
									Skills : TOR, El-Gamal, Java, Team work, Latex
								</p>
							</div>
							<div class="2u">
								<a href="#" class="image fit"><img src="images/tor.png" alt=""></a>
							</div>
						</div>
						<div class="row">
							<div class="10u">
								<h4>System administrator</h4>
								<p>
									OS: Debian<br/>
									Goals: Setting up and managing an entire server.<br/>
									Skills: Debian, SLL, iptables, fail2ban, rkhunter, servers: ssh, email, git, IRC, web, vpn.
								</p>
							</div>
							<div class="2u">
								<a href="#" class="image fit"><img src="images/linux.png" alt=""></a>
							</div>
						</div>
						<div class="row">
							<div class="10u">
								<h4>Security software : DSA & RSA</h4>
								<p>
									Development of : DSA and RSA according to the NIST requirements.<br/>
									Skills : RSA, DSA, C, GMP
								</p>
								</div>
							<div class="2u">
								<a href="#" class="image fit"><img src="images/rsa.png" alt=""></a>
							</div>
						</div>
					</section>
				</article>

				<!-- My CV --> 
				<article id="cv" class="panel">
					<header>
						<h2>Curriculum Vitae</h2>
					</header>
					<section class="image-centered">
						<p>See my Linkedin page : <a href="http://fr.linkedin.com/in/alexandrepujol/en" class="icon fa-linkedin-square"><span>Linkedin</span></a>
<!-- 						<?php //require "pages/cv.php"; ?> -->
<!-- 						<a href="download/CV.Alexandre.PUJOL.pdf"><img src="images/CV.png" class="image image-centered" alt="CV" /></a> -->
					</section>
				</article>
				
				<!-- Contact -->
				<article id="contact" class="panel">
					<header>
						<h2>Contact Me</h2>
					</header>
					<form method="post">
						<div>
							<div class="row">
								<div class="6u">
									<input type="text" name="name" placeholder="Name *" />
								</div>
								<div class="6u">
									<input type="text" name="email" placeholder="Email *" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<input type="text" name="subject" placeholder="Subject *" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<textarea name="message" placeholder="Message *" rows="8"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<input type="submit" value="Send Message" />
								</div>
							</div>
						</div>
					</form>
				</article>

			</div>
<?php
	require "app/templates/foot.php";
?>
