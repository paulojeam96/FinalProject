<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
		<style>
			body{
                                background-image:url('imagens/Login.jpg');
                                background-size: 110% auto;
                                background-repeat: no-repeat;  
				color: #DDD;
				font-family: 'Helvetica', 'Lucida Grande', 'Arial', sans-serif;
			}
			.border,
			.rain{
				height: 170px;
				width: 320px;
			}
			/* Layout with mask */
			.rain{
				 padding: 50px;
				 margin: 100px auto;
                                 
			}
			/* Artifical "border" to clear border to bypass mask */
			.border{
				padding: 1px;
				-moz-border-radius: 5px;
			    -webkit-border-radius: 5px;
				border-radius: 5px;
                                
			}
			
			/* Regular Form Styles */
			form{
				background: #212121;
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
                             border-radius: 5px;
				height: 100%;
				width: 100%;
				background: -moz-radial-gradient(50% 46% 90deg,circle closest-corner, #242424, #090909);
				background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 150, from(#242424), to(#090909));
			}
                        
			form label{
				display: block;
				padding: 10px 10px 5px 15px;
				font-size: 11px;
				color: #777;
			}
			form input{
				display: block;
				margin: 5px 10px 10px 15px;
				width: 85%;
				background: #111;
				-moz-box-shadow: 0px 0px 4px #000 inset;
				-webkit-box-shadow: 0px 0px 4px #000 inset;
				box-shadow: 0px 0px 4px #000 inset;
				outline: 1px solid #333;
				border: 1px solid #000;
				padding: 5px;
				color: #444;
				font-size: 16px;
			}
			form input:focus{
				outline: 1px solid #555;
				color: #FFF;
			}
                        
		</style>
	</head>
	<body id="home">
		<div class="rain">
			<div class="border start">
                            
				<form method="POST"> 
                                    <!-- Deve redirecionar para a página de validação -->
					<label for="email">Email</label>
					<input name="email" type="text" placeholder="Email"/>
					<label for="pass">Password</label>
					<input name="pass" type="password" placeholder="Password"/>
                                        <input type="submit" value="LOG IN">
                                        <input type="button" value="CADASTRAR" action="etapa1.php"/>
                                         
                                </form>      
                               
                                       
                                
			</div>
		</div>
	</body>
</html>