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
    $preference->save();
    $preference->back_urls=array(
      "success"=>"http://localhost/maidenware/pago-completo.php",
      "failure"=>"https://",
      "pending"=>"https://"
    );
    ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/css/index.css">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title></title>
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
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="how-it-works.html">How It Works</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="services.html">Services</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="contact.html">Contact</a>
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
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
					</li>
				</ul>
				<!-- account btn  <a href="#!" class="btn btn-outline-primary">Log In</a>-->
				<!-- account btn  <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>-->
			</div>
		</div>
	</nav>
</header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>NFC</h4>
              <h2>Tarjeta de Presentacion</h2>
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
              <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="#" method="post" class="form">
              <h2>Tarjeta de Presentación</h2>

              <br>

              <p class="lead">
                <small><del> $500.00</del></small><strong class="text-primary">$300.00</strong>
              </p>

              <br>

              <p class="lead">
                Las tarjetas de presentación en NFC son una forma moderna y eficaz de compartir tus datos de contacto con otros profesionales y clientes potenciales.
              </p>

              <br> 

              <div class="row">
                <div class="col-sm-4">
                  <label class="control-label">Extra 1</label>
                  <div class="form-group">
                    <select class="form-control">
                      <option value="0">18 gears</option>
                      <option value="1">21 gears</option>
                      <option value="2">27 gears</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="1">
                      </div>
                    </div>

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
    <style> .btcpay-form { display: inline-flex; align-items: center; justify-content: center; } .btcpay-form--inline { flex-direction: row; } .btcpay-form--block { flex-direction: column; } .btcpay-form--inline .submit { margin-left: 15px; } .btcpay-form--block select { margin-bottom: 10px; } .btcpay-form .btcpay-custom-container{ text-align: center; }.btcpay-custom { display: flex; align-items: center; justify-content: center; } .btcpay-form .plus-minus { cursor:pointer; font-size:25px; line-height: 25px; background: #DFE0E1; height: 30px; width: 45px; border:none; border-radius: 60px; margin: auto 5px; display: inline-flex; justify-content: center; } .btcpay-form select { -moz-appearance: none; -webkit-appearance: none; appearance: none; color: currentColor; background: transparent; border:1px solid transparent; display: block; padding: 1px; margin-left: auto; margin-right: auto; font-size: 11px; cursor: pointer; } .btcpay-form select:hover { border-color: #ccc; } .btcpay-form option { color: #000; background: rgba(0,0,0,.1); } .btcpay-input-price { -moz-appearance: textfield; border: none; box-shadow: none; text-align: center; font-size: 25px; margin: auto; border-radius: 5px; line-height: 35px; background: #fff; }.btcpay-input-price::-webkit-outer-spin-button, .btcpay-input-price::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; } </style>
<form method="POST" action="https://mainnet.demo.btcpayserver.org/api/v1/invoices" class="btcpay-form btcpay-form--block">
  <input type="hidden" name="storeId" value="CJgq39kg6FH14gk3UVmxx9Bk5wmjTh8fDDxpXAgzw5J8" />
  <input type="hidden" name="checkoutDesc" value="Identidad Virtual" />
  <input type="hidden" name="browserRedirect" value="https://moodle.org/mod/forum/discuss.php?d=337481" />
  <input type="hidden" name="price" value="0.00102" />
  <input type="hidden" name="currency" value="BTC" />
  <input type="image" class="submit" name="submit" src="https://maidenware1.s3.us-east-2.amazonaws.com/Bitcoin.png" style="width:209px" alt="Pay with BTCPay Server, a Self-Hosted Bitcoin Payment Processor">
</form>
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
              <h2>Productos Similares</h2>
              <a href="products.html">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>Omega bicycle</h4></a>
                <h6><small><del>$999.00 </del></small> $779.00</h6>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>Nike Revolution 5 Shoes</h4></a>
                <h6><small><del>$99.00</del></small>  $79.00</h6>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>Treadmill Orion Sprint</h4></a>
                <h6><small><del>$1999.00</del></small>   $1779.00</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
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