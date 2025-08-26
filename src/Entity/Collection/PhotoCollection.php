<?php

namespace Entity\Collection;

use Database\MyPdo;
use Entity\Photo;
use PDO;

class PhotoCollection
{
    public static function findByEvent(int $eventId): array
    {

        $stmt = MyPDO::getInstance()->prepare(
            <<<'SQL'
            SELECT id, jpeg 
            FROM photo 
            WHERE eventId = ?;
            SQL
        );

        $stmt->bindParam(1, $eventId);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, Photo::class);
        if (($tabPhoto = $stmt->fetchAll()) !== false) {
            return $tabPhoto;
        }
        return [];
    }

}