<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" value="" />
		<meta name="keywords" value="" />
		<meta name="author" value="Hugo Chimello"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.timer.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<title>Blog</title>
                
	</head>
	<body>
		<div id="main">
			<nav id="mainNav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="Hot.php"></a>HOT</li>
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
					<section id="single">
						<header>
							<figure>
                                                            
                                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                                Select image to upload:
                                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                                                <input type="submit" value="Upload Image" name="submit">
                                                                    </form>  
                                                        </figure>    
							<div id="postMeta">
								<ul>
									<li class="date">dd/mm/yyyy as HH:MM</li>
									<li class="author">Nome do autor</li>
									<li class="comments">0 comentários</li>
								</ul>
							</div>
						</header>
                                            <article>
                                                        <?php

                                                            $host="localhost"; // Host name 
                                                            $username=""; // Mysql username 
                                                            $password=""; // Mysql password 
                                                            $db_name="test"; // Database name 
                                                            $tbl_name="forum_question"; // Table name 

                                                            // Connect to server and select database.
                                                            mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                                                            mysql_select_db("$db_name")or die("cannot select DB");

                                                            // get data that sent from form 
                                                            $topic=$_POST['topic'];
                                                            $detail=$_POST['detail'];
                                                            $name=$_POST['name'];
                                                            $email=$_POST['email'];

                                                            $datetime=date("d/m/y h:i:s"); //create date time

                                                            $sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
                                                            $result=mysql_query($sql);

                                                            if($result){
                                                            echo "Successful<BR>";
                                                            echo "<a href=main_forum.php>View your topic</a>";
                                                            }
                                                            else {
                                                            echo "ERROR";
                                                            }
                                                            mysql_close();
                                                            ?>
                                                        <table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                                                        <tr>
                                                        <form id="form1" name="form1" method="post" action="add_topic.php">
                                                        <td>
                                                        <table width="600" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                                        <tr>
                                                        <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
                                                        </tr>
                                                        <tr>
                                                        <td width="14%"><strong>Topic</strong></td>
                                                        <td width="2%">:</td>
                                                        <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
                                                        </tr>
                                                        <tr>
                                                        <td valign="top"><strong>Detail</strong></td>
                                                        <td valign="top">:</td>
                                                        <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
                                                        </tr>
                                                        <tr>
                                                        <td><strong>Name</strong></td>
                                                        <td>:</td>
                                                        <td><input name="name" type="text" id="name" size="50" /></td>
                                                        </tr>
                                                        <tr>
                                                        <td><strong>Email</strong></td>
                                                        <td>:</td>
                                                        <td><input name="email" type="text" id="email" size="50" /></td>
                                                        </tr>
                                                        <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
                                                        </tr>
                                                        </table>
                                                        </td>
                                                        </form>
                                                        </tr>
                                                        </table>
						</article>
						<footer>
							<section id="recommendedPost">
								
								<section id="otherPosts">
									
									</section>
								</section>
							</section>
							<section id="postComments">
								<h3>Comentários</h3>
                                                                <div id="fb-root"></div>
                                                                    <script>(function(d, s, id) {
                                                                      var js, fjs = d.getElementsByTagName(s)[0];
                                                                      if (d.getElementById(id)) return;
                                                                      js = d.createElement(s); js.id = id;
                                                                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                                                                      fjs.parentNode.insertBefore(js, fjs);
                                                                    }(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5" data-colorscheme="light"></div>
                                                                
							</section>
						</footer>
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
				<div id="copy">Copyright - <strong></strong> &copy; 2014</div>
			</footer>
		</div>
	</body>
</html>