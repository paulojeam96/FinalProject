<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" value="Blog de tecnologia e cultura" />
		<meta name="keywords" value="tecnologia,shuffle,shuffle blog,blog,cultura,video games,games,jogos,musica,filme" />
		<meta name="author" value="Hugo Chimello"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.timer.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<title> Blog</title>
	</head>
	<body>
		<div id="main">
			<nav id="mainNav">
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="games.html">GAMES</a></li>
					<li><a href="tec.html">TECNOLOGIA</a></li>
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
					<section id="single">
						<article>
							<h3>SOBRE</h3>
							<p>No ar desde 2012, o Shuffle Blog é um veículo online voltado para o público jovem interessado em cultura pop, ou seja, games, filmes, tecnologia, etc. Com um formato diversificado em texto, imagens e vídeos, o SB preza pelo material inovador, trazendo notícias curiosas, criativas, inspiradoras e atuais.</p>
							<p>Resultado de uma parceria entre dois amigos (Guilherme “Koala” Kyoji & Vitor “Suishiro” Kawai) que se conheceram em um MMORPG há quase 10 anos, o site surgiu a partir da necessidade de uma plataforma para que seus colaboradores expressassem e compartilhassem suas opiniões sobre as novidades.</p>
							<p>Dito isso, a equipe Shuffle Blog espera que o conteúdo seja agradável e que agregue algum valor cultural aos seus usuários. :)</p>

							<h3>CONTATO</h3>
							<p>Caso tenha interesse em publicar um artigo, desenvolver uma parceria ou apenas fazer uma crítica, basta preencher o formulário abaixo. Toda mensagem é bem-vinda!</p>
							<form id="contact" name="contactForm" method="post">
								<h5 id="nameLabel">Nome <span class="red">*</span>:</h5>
								<input type="text" placeholder="Escreva o seu nome" name="name" required/>
								<h5 id="emailLabel">Email <span class="red">*</span>:</h5>
								<input type="email" placeholder="Escreva o seu email" name="email" required/>
								<h5 id="webLabel">Website:</h5>
								<input type="webSite" placeholder="http://site" name="webSite"/>
								<h5 id="textLabel">Texto <span class="red">*</span>:</h5>
								<textarea name="text" required></textarea>
								<br/>
								<input type="submit" value="Enviar" />
								(<span class="red">*</span> - Obrigatório)
							</form>
						</article>
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