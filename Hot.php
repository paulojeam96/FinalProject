<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" value="Blog de tecnologia e cultura" />
		<meta name="keywords" value="" />
		<meta name="author" value="Hugo Chimello"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.timer.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<title>Shuffle Blog</title>
	</head>
	<body>
		<div id="main">
			<nav id="mainNav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="Hot.php">HOT</a></li>
					<li><a href="createpost.php">New Post</a></li>
					<li><a href="about.html#single">SOBRE/CONTATO</a></li>
				</ul>
				<form id="search" method="get">
					<input type="text" name="searchQuery" placeholder="Busca"/>
					<input type="submit" value=""/>
				</form>
			</nav>
			<header>
				<div id="banner">
					<figure>
						<a href="index.html"><img src="images/banner.png" alt="logo"/></a>
					</figure>
				</div>
			</header>
			<section id="contentBody">
				<section id="posts">
					<section id="featured">
						<section id="featPost1">
							<a href="tec1.html#single">
								<figure><img src="images/mouse.png" alt="img" /></figure>
								<h1>DEATH ADDER, BAD ASS??</h1>
								<p>Em um anuncio recente, a Razer divulgou imagens do novo mouse Death Adder e mousepad Goliathus estilizado com elementos do jogo World of Tanks, desenvolvido pela gigante dos MMOs F2P, Wargaming.</p>
							</a>
						</section>
						<section id="featPost2">
							<a href="tec2.html#single">
								<figure><img src="images/teclado.png" alt="img" /></figure>
								<h1>Teclado mais esquisito do mundo</h1>
								<p>A CES 2014 comeca oficialmente apenas amanhã, porém algumas novidades já estão sendo anunciadas hoje – dia reservado para convidados e imprensa – como é o caso do TREWGrip, um teclado Bluetooth para Smartphones e Tablets.</p>
							</a>
						</section>
						<section id="featPost3">
							<a href="tec3.html#single">
								<figure><img src="images/paul.jpg" alt="img" /></figure>
								<h1>Paul Walker aposentado!?</h1>
								<p>Paul Walker, ator que faleceu em um acidente de carro no dia 30 de novembro, terá seu personagem aposentado no novo filme ‘Velozes e Furiosos 7[...]</p>
							</a>
						</section>
						<section id="featPost4">
							<a href="games1.html#single">
								<figure><img src="images/watchdogs.jpg" alt="img" /></figure>
								<h1>Watch Dogs, jogando em Chicago</h1>
								<p>Watch Dogs" foi revelado pela Ubisoft durante a E3 2012, nos EUA. Com uma qualidade técnica e gráficos impressionantes, o jogo conquistou a platéia logo de cara, mas a demonstração teve seu[...]</p>
							</a>
						</section>
						<section id="featPost5">
							<a href="games2.html#single">
								<figure><img src="images/titanfall.jpg" alt="img" /></figure>
								<h1>TitanFALL!!!! 2014</h1>
								<p>Jogo de tiro dos criadores de "Modern Warfare" tem robôs e soldados do futuro.</p>
							</a>
						</section>
						<div id="progressWrapper"><div id="progressBar"></div></div>
						<button id="prev">&lt;</button>
						<button id="next">&gt;</button>
					</section>
					<section id="social">
						<iframe src="//"
						scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;"
						allowTransparency="true"></iframe>
						<iframe frameborder="0" id="fr" scrolling="no"
						src=""
						style="border: 0px; height: 72px; background:#E6E6E6; overflow-x: hidden;
						overflow-y: hidden; width: 300px;"></iframe>
					</section>
					<section class="post-small">
						<a href="games2.html#single">
							<figure><img src="images/titanfall.jpg" alt="img" /></figure>
							<h2>TitanFALL!!!! 2014</h2>
							<p>Jogo de tiro dos criadores de "Modern Warfare" tem robôs e soldados do futuro.</p>
						</a>
					</section>
					<section class="post-small">
						<a href="games3.html#single">
							<figure><img src="images/tlou.jpg" alt="img" /></figure>
							<h2>The Last of Us , corre que la vem clickers!!!</h2>
							<p>The Last of Us começa numa zona de quarentena em Boston, vinte anos depois da praga. A órfã de 14 anos, Ellie...</p>
						</a>
					</section>
					<section class="post-small">
						<a href="games4.html#single">
							<figure><img src="images/gw2.jpg" alt="img" /></figure>
							<h2>Guild Wars 2 - MMORPG </h2>
							<p>A NCSoft, criadora de Guild Wars 2, tem muito a comemorar. De acordo com dados fornecidos pela empresa de pesquisa DFC, o game foi o MMORPG que vendeu mais rápido no ocidente até hoje</p>
						</a>
					</section>
					<section class="post-small">
						<a href="games1.html#single">
							<figure><img src="images/watchdogs.jpg" alt="img" /></figure>
							<h2>Watch Dogs, jogando em Chicago</h2>
							<p>Watch Dogs" foi revelado pela Ubisoft durante a E3 2012, nos EUA. Com uma qualidade técnica e gráficos impressionantes, o jogo conquistou a platéia logo de cara, mas a demonstração teve seu</p>
						</a>
					</section>
				</section>
			</section>
			<footer>
				<section id="footerContent">
					<section class="footerTile">
						<header><h3>Parceiros</h3></header>
						<section>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
							<a href="#">
								<figure class="parter">
									<img src="images/partner.jpg" alt="parceiro"/>
								</figure>
							</a>
						</section>
					</section>
					<section class="footerTile">
						<header><h3>Publicidade</h3></header>
					</section>
					<section class="footerTile">
					</section>
				</section>
				<div id="copy">Copyright - <strong> Blog</strong> &copy; 2014</div>
			</footer>
		</div>
	</body>
</html>