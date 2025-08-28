<?php

namespace Entity;

use Database\MyPdo;
use Entity\Exception\EntityNotFoundException;
use PDO;

class Photo
{
    private int $id;
    private string $jpeg;
    private int $eventId;

    /**
     * Get the value of afficheId
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of jpeg
     */
    public function getJpeg(): string
    {
        return $this->jpeg;
    }

    /**
     * Get the value of eventId
     */
    public function getEventId(): int
    {
        return $this->eventId;
    }

    /**
     * Returns the instance of Photo which is identified by the id in parameter
     *
     * @param $id int id to search
     * @return Photo that corresponds to the id
     */
    public static function findById(int $id): Photo
    {
        $stmt = MyPDO::getInstance()->prepare(
            <<<'SQL'
            SELECT photoId, jpeg
            FROM photo
            WHERE photoId = ?
            SQL
        );

        $stmt->bindParam(1, $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, Photo::class);
        if (($photo = $stmt->fetch()) === false) {
            throw new EntityNotFoundException();
        }
        return $photo;
    }
}