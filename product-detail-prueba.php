<?php

    include_once "vendor/autoload.php";
    $token="TEST-3614927209770692-041418-05738a329f43b4a87d51027d707cdbe9-1352924688";
    MercadoPago\SDK::setAccessToken($token);

    $preference = new MercadoPago\Preference();
    
        
    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Tarjeta';
    $item->quantity = 1;
    $item->unit_price = 900;
    $preference->items = array($item);
    $preference->save();
    ?>
<!DOCTYPE html>
<html>
    <body>
    <form action="/procesar-pago" method="POST">
        <script
        src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
        data-preference-id="<?php echo $preference->id; ?>">
        </script>
    </form>
    </body>
</html>