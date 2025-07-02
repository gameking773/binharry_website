<?php

declare(strict_types=1);

namespace Entity\Collection;

class EventCollection
{
    /**
     * Returns an array that contains all the instances of Events
     *
     * @return array Array that contains all the instances of Events
     */
    public static function findAll(): array
    {
        $stmt = MyPDO::getInstance()->prepare(
            <<<'SQL'
                SELECT eventId, eventNom, eventDate, eventDesc, afficheId
                FROM evenement
                SQL
        );

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Event::class);
        if (($listeEvent = $stmt->fetchAll()) !== false) {
            return $listeEvent;
        }

        return [];
    }
};