<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Entity\Exception\ParameterException;
use Entity\Affiche as Affiche;

try {
    if (isset($_GET["afficheId"]) && ctype_digit($_GET["afficheId"])) {
        $afficheId = $_GET["afficheId"];
        $afficheId = intval($afficheId);
        $affiche = Affiche::findById($afficheId);
        header('Content-Type: image/jpeg');
        echo readfile($affiche->getJpeg());
    } else {
        header('Content-Type: image/jpeg');
        echo file_get_contents("img/affiche_placeholder.png");
    }
} catch (ParameterException) {
    http_response_code(400);
} catch (EntityNotFoundException) {
    http_response_code(404);
} catch (Exception) {
    http_response_code(500);
}

exit();
