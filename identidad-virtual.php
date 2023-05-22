<?php

    include_once "vendor/autoload.php";
    $token="TEST-3614927209770692-041418-05738a329f43b4a87d51027d707cdbe9-1352924688";
    MercadoPago\SDK::setAccessToken($token);

    $preference = new MercadoPago\Preference();
    
        
    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Tarjeta';
    $item->quantity = 1;
    $item->unit_price = 30;
    $preference->items = array($item);
    $preference->Back_urls = array(
      "success" => "https://www.maidenware.com.mx/Identidad-Virtual/sign-up.html",
      "failure" => "http://www.maidenware.com.mx",
      "pending" => "http://www.tu-sitio/pending"
  );
  $preference->save();
    ?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="assets/css/index.css">
<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="plugins/font-awesome/solid.css">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://maidenware1.s3.us-east-2.amazonaws.com/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Identidad Virtual</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    Preloader End ***** -->

    <!-- Header -->
    <header class="navigation bg-tertiary">
  <!--<div class="custom-loader"></div>-->
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="https://maidenware1.s3.us-east-2.amazonaws.com/MAIDENWARE.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="www.maidenware.com.mx">Inicio</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="https://info.maidenware.com.mx/contacto/">Acerca de</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="https://info.maidenware.com.mx/">¿Cómo funciona?</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="https://info.maidenware.com.mx/contacto/">Contacto</a>
					</li>
					<!--<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="blog.html">Blog</a>
							</li>
							<li><a class="dropdown-item " href="blog-details.html">Blog Details</a>
							</li>
							<li><a class="dropdown-item " href="service-details.html">Service Details</a>
							</li>
							<li><a class="dropdown-item " href="faq.html">FAQ&#39;s</a>
							</li>
							<li><a class="dropdown-item " href="legal.html">Legal</a>
							</li>
							<li><a class="dropdown-item " href="terms.html">Terms &amp; Condition</a>
							</li>
							<li><a class="dropdown-item " href="privacy-policy.html">Privacy &amp; Policy</a>
							</li>
						</ul>
					</li>-->
				</ul>
				<!-- account btn --> <a href="Identidad-Virtual\log-in.html" class="btn btn-outline-primary">Log In</a>
			</div>
		</div>
	</nav>
</header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(https://maidenware1.s3.us-east-2.amazonaws.com/rafagodgod.png);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>NFC</h4>
              <h2>Identidad-Virtual</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div>
              <img src="https://maidenware1.s3.us-east-2.amazonaws.com/Tarjeta+1.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 col-xs-12">
                <div>
                  <img src="https://maidenware1.s3.us-east-2.amazonaws.com/tarjeta+2.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-md-4 col-xs-12">
                <div>
                  <img src="https://maidenware1.s3.us-east-2.amazonaws.com/mercado_pago_ofertas.webp" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-md-4 col-xs-12">
                <div>
                  <img src="https://maidenware1.s3.us-east-2.amazonaws.com/tarjeta3.png" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="#" method="post" class="form">
              <h2>Identidad-Virtual</h2>

              <br>

              <p class="lead">
                <small><del> $500.00</del></small><strong class="text-primary">$400.00</strong>
              </p>

              <br>

              <p class="lead">
                Las tarjetas de presentación en NFC son una forma moderna y eficaz de compartir tus datos de contacto con otros profesionales y clientes potenciales.
              </p>

              <br> 

              <div class="row">

                    <style>
                        .form-hide{
                            display:none;
                        } 
                    </style>

                    <div class="col-sm-6">
                      <div class="form-hide"  id="wallet_container">
                      <form   action="" method="POST">
                      <script
                        src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                        data-preference-id="<?php echo $preference->id; ?>">
                      </script>
                      </form>
                    </div>
                      <div  id="wallet_container">
                      <form action="" method="POST">
        <script
        src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
        data-preference-id="<?php echo $preference->id; ?>">
        </script>
    </form>
    
    <div style="margin-left:-20px;" class="col-sm-6">
      <style> .btcpay-form { display: inline-flex; align-items: center; justify-content: center; } .btcpay-form--inline { flex-direction: row; } .btcpay-form--block { flex-direction: column; } .btcpay-form--inline .submit { margin-left: 15px; } .btcpay-form--block select { margin-bottom: 10px; } .btcpay-form .btcpay-custom-container{ text-align: center; }.btcpay-custom { display: flex; align-items: center; justify-content: center; } .btcpay-form .plus-minus { cursor:pointer; font-size:25px; line-height: 25px; background: #DFE0E1; height: 30px; width: 45px; border:none; border-radius: 60px; margin: auto 5px; display: inline-flex; justify-content: center; } .btcpay-form select { -moz-appearance: none; -webkit-appearance: none; appearance: none; color: currentColor; background: transparent; border:1px solid transparent; display: block; padding: 1px; margin-left: auto; margin-right: auto; font-size: 11px; cursor: pointer; } .btcpay-form select:hover { border-color: #ccc; } .btcpay-form option { color: #000; background: rgba(0,0,0,.1); } .btcpay-input-price { -moz-appearance: textfield; border: none; box-shadow: none; text-align: center; font-size: 25px; margin: auto; border-radius: 5px; line-height: 35px; background: #fff; }.btcpay-input-price::-webkit-outer-spin-button, .btcpay-input-price::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; } </style>
<form method="POST" action="https://mainnet.demo.btcpayserver.org/api/v1/invoices" class="btcpay-form btcpay-form--block">
  <input type="hidden" name="storeId" value="CJgq39kg6FH14gk3UVmxx9Bk5wmjTh8fDDxpXAgzw5J8" />
  <input type="hidden" name="checkoutDesc" value="Identidad Virtual" />
  <input type="hidden" name="browserRedirect" value="https://www.maidenware.com.mx" />
  <input type="hidden" name="price" value="0.0000019" />
  <input type="hidden" name="currency" value="BTC" />
  <input type="image" class="submit" name="submit" src="https://maidenware1.s3.us-east-2.amazonaws.com/Bitcoin.png" style="width:209px" alt="Pay with BTCPay Server, a Self-Hosted Bitcoin Payment Processor">
</form>
</div>
                    </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Conoce más</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://info.maidenware.com.mx/que-es-nfc/"><img src="" alt=""></a>
              <div class="down-content">
                <a href="https://info.maidenware.com.mx/que-es-nfc/"><h4>¿Que es nfc?</h4>
                <h6>El futuro de la tecnología...</h6></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="https://info.maidenware.com.mx/buy-identidad-virtual/"><img src="" alt=""></a>
              <div class="down-content">
                <a href="https://info.maidenware.com.mx/buy-identidad-virtual/"><h4>¿Como comprar?</h4>
                <h6>Super facil...</h6></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="https://info.maidenware.com.mx/include-identidad-virtual/"><img src="" alt="">
              <div class="down-content">
                <a href="https://info.maidenware.com.mx/include-identidad-virtual/"><h4>¿Que incluye mi compra?</h4>
                <h6>La puerta al futuro...</h6></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Personal loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Home Equity Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Student Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Mortgage Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Payday Loans</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">About</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">Benefits</a>
						</li>
						<li class="mb-2"><a href="#!">Careers</a>
						</li>
						<li class="mb-2"><a href="#!">Our Story</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Help</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="contact.html">Contact Us</a>
						</li>
						<li class="mb-2"><a href="faq.html">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 newsletter-form">
				<div style="background-color: #F4F4F4; padding: 35px;">
					<h5 class="mb-4 text-primary font-secondary">Newsletter</h5>
					<div class="pe-0 pe-xl-5">
						<form action="newsletter.php" method="post" name="mc-embedded-subscribe-form" target="_blank">
							<div class="input-group mb-3">
								<input type="text" name="correo" class="form-control shadow-none bg-white border-end-0" placeholder="Email"> <span class="input-group-text border-0 p-0">
                    <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                      aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                  </span>
							</div>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
							</div>
						</form>
					</div>
					<p class="mb-0">Suscribete a nuestro newsletter para recibir mas informacion, promociones y novedades sobre nosotros</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-5 text-center text-md-start">
			<div class="col-lg-4">
        <a href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="https://maidenware1.s3.us-east-2.amazonaws.com/MAIDENWARE.png" alt="Wallet">
        </a>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-center">
					<li class="list-inline-item me-4"><a class="text-black" href="https://drive.google.com/file/d/146sIx1Si3z-YF62OkX-Ww-XVmKRynovZ/view?usp=sharing">Politica de Privacidad</a>
					</li>
					<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
				<ul class="list-unstyled list-inline mb-0 social-icons">
					<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://www.facebook.com/profile.php?id=100064601179100"><i class="fab fa-facebook-f"></i></a>
					</li>
					<!--<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>-->
					<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://www.instagram.com/maidenware/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

  </body>

</html>
