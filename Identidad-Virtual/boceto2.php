<?php
echo '	<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>'.$nombre.'</h1>
						<p>'.$profesion.'</p>
						<nav>
							<ul>';
							if($NumeroWhats!=""){
                                echo '<li><a href="https://wa.me/52'.$NumeroWhats.'/" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>';
                            }
							if($Facebook!=""){
                                echo '<li><a href="'.$Facebook.'" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>';
                            }
							if($Instagram!=""){
                                echo '<li><a href="https://www.instagram.com/'.$Instagram.'/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>';
                            }
							if($github!=""){
                                echo '<li><a href="https://github.com/'.$github.'/" class="icon brands fa-github"><span class="label">Github</span></a></li>';
                            }
							if($Linkedin!=""){
                                echo '<li><a href="'.$Linkedin.'/" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>';
                            }
							if($Youtube!=""){
                                echo '<li><a href=""https://youtube.com/'.$Youtube.'/" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>';
                            }
                            if($twitter!=""){
                                echo '<li><a href="https://twitter.com/'.$twitter.'/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>';
                            }
							if($Discord!=""){
                                echo '<li><a href="'.$twitter.'" class="icon brands fa-discord"><span class="label">Discord</span></a></li>';
                            }
                            if($correo!=""){
                                echo '<li><a href="mailto:'.$correo.'" class="icon solid fa-envelope"><span class="label">Email</span></a></li>';
                            }
							
							echo'
                                </ul>
						</nav>
                        <p><input type="Submit" value="Guardar" style="color: black;"></p>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Maidenware. Design: <a href="http://html5up.net">HTML5 UP</a>.</p><br>                        
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove("is-preload"); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
        ';
?>