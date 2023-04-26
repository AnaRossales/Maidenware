<?php
echo '
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>'.$nombre.'</h1>
								<p>'.$profesion.'</p>
							</div>
						</div>
						<nav>
							<ul>';
                            if($NumeroWhats!=""){
                                echo '<li><a href="https://wa.me/52'.$NumeroWhats.'">Whatsapp</a></li>';
                            }
							if($Facebook!=""){
                                echo '<li><a href="'.$Facebook.'">Facebook</a></li>';
                            }
							if($Instagram!=""){
                                echo '<li><a href="https://www.instagram.com/'.$Instagram.'/">Instagram</a></li>';
                            }
							if($github!=""){
                                echo '<li><a href="https://github.com/'.$github.'/">GitHub</a></li>';
                            }
							if($Linkedin!=""){
                                echo '<li><a href="'.$Linkedin.'">Linkedin</a></li>';
                            }
							if($twitter!=""){
                                echo '<li><a href="https://twitter.com/'.$twitter.'/">Twitter</a></li>';
                            }
							if($Youtube!=""){
                                echo '<li><a href="https://youtube.com/'.$Youtube.'/">Youtube</a></li>';
                            }
							if($Discord!=""){
                                echo '<li><a href="'.$Discord.'/">Servidor de Discord</a></li>';
                            }
								echo'
							</ul>
						</nav>
					</header>
					<footer id="footer">
						<p class="copyright">&copy; Maidenware. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						<br><br>
					</footer>
			</div>
		<!-- BG -->
			<div id="bg"></div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>';