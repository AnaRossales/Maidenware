<?php
echo '
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->

					<nav id="nav">

						<a href="#" class="icon solid fa-home"><span>Inicio</span></a>
						<a href="#Contacto" class="icon solid fa-envelope"><span>Contacto</span></a>
						<a href="#Redes" class="icon solid fa-link"><span>Redes</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>'.$nombre.'</h1>
									<p>'.$profesion.'</p>
								</header>
								<a href="#Portafolio" class="jumplink pic">
									<span class="arrow icon solid fa-chevron-right"><span>Mira mi Portafolio</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>
						<!-- Contacto-->
							<article id="Contacto" class="panel">
								<header>
									<h2>Contactame</h2>
								</header>
								<form action="#" method="post">
									<div>
										<div class="row">
											<div class="col-6 col-12-medium">
												<input type="text" name="name" placeholder="Nombre" />
											</div>
											<div class="col-6 col-12-medium">
												<input type="text" name="email" placeholder="Correo" />
											</div>
											<div class="col-12">
												<input type="text" name="subject" placeholder="Tema" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Mensaje" rows="6"></textarea>
											</div>
											<div class="col-12">
												<input type="submit" value="Enviar Mensaje" />
											</div>
										</div>
									</div>
								</form>
							</article>
							<article id="Redes" class="panel">
								<header>
									<h2 style="text-align: center;">Redes</h2>
								</header>
								<p>
									Estas son mis redes sociales
								</p><br><br>
                                    <div class="social-menu">
                                        
                                        <ul>';
                                         if($Facebook!=""){
                                            echo '<li><a href="'.$Facebook.'" class="icon brands fa-facebook-f" data-color:"facebook"><span class="label">Facebook</span></a></li>';
                                        }
                                        if($twitter!=""){
                                            echo '<li><a href="https://twitter.com/'.$twitter.'/" class="icon brands fa-twitter" data-color:"twitter"><span class="label">Twitter</span></a></li>';
                                        }                                          
                                        if($Instagram!=""){
                                            echo '<li><a href="https://www.instagram.com/'.$Instagram.'/" class="icon brands fa-instagram" data-color:"instagram"><span class="label">Instagram</span></a></li>';
                                        }
                                          if($Youtube!=""){
                                            echo '<li><a href=""https://youtube.com/'.$Youtube.'/" class="icon brands fa-youtube" data-color:"youtube"><span class="label">Youtube</span></a></li>';
                                        }
                                          if($Linkedin!=""){
                                            echo '<li><a href="'.$Linkedin.'/" class="icon brands fa-linkedin" data-color:"linkedin"><span class="label">Linkedin</span></a></li>';
                                        }
                                          if($NumeroWhats!=""){
                                            echo '<li><a href="https://wa.me/52'.$NumeroWhats.'/" class="icon brands fa-whatsapp" data-color:"whatsapp"><span class="label">Whatsapp</span></a></li>';
                                        }
                                        if($github!=""){
                                            echo '<li><a href="https://github.com/'.$github.'/" class="icon brands fa-github" data-color:"github"><span class="label">Github</span></a></li>';
                                        }
                                        if($Discord!=""){
                                            echo '<li><a href="'.$Discord.'" class="icon brands fa-discord" data-color:"discord"><span class="label">Discord</span></a></li>';
                                        }
                                        if($correo!=""){
                                            echo '<li><a href="mailto:'.$correo.'" class="icon solid fa-envelope" data-color:"correo"><span class="label">Correo</span></a></li>';
                                        }
                                        echo'                                        
                                        </ul>
                                    </div>
                                
								<section>
									
								</section>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Maidenware.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assetsplantilla3\assets/js/jquery.min.js"></script>
			<script src="assetsplantilla3\assets/js/browser.min.js"></script>
			<script src="assetsplantilla3\assets/js/breakpoints.min.js"></script>
			<script src="assetsplantilla3\assets/js/util.js"></script>
			<script src="assetsplantilla3\assets/js/main.js"></script>

	</body>
</html>';
?>