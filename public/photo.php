<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Entity\Exception\ParameterException;
use Entity\Photo as Photo;

try {
    if (isset($_GET["photoId"]) && ctype_digit($_GET["photoId"])) {
        $photoId = $_GET["photoId"];
        $photoId = intval($photoId);
        $photo = Photo::findById($photoId);
        header('Content-Type: image/jpeg');
        echo readfile($photo->getJpeg());
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