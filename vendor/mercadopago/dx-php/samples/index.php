<?php

    require_once 'vendor/autoload.php';
    require __DIR__ .  'vendor/autoload.php';
    MercadoPago\SDK::setAccessToken("TEST-3614927209770692-041418-05738a329f43b4a87d51027d707cdbe9-1352924688");

    $preference = new MercadoPago\Preference();
    
    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75;
    $preference->items = array($item);
    $preference->save();
    $preference_id = $preference->id;
    if ($preference->status === "approved") {
        echo "La preferencia se ha creado correctamente.";
      } else {
        echo "Ha ocurrido un error al crear la preferencia: " . $preference->status;
      }
      $preference->back_urls = array(
        "success" => "https://www.tu-sitio/success",
        "failure" => "http://www.tu-sitio/failure",
        "pending" => "http://www.tu-sitio/pending"
    );   
?>
