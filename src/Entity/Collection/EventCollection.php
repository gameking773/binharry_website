<?php

declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;
use Entity\Event ;
use DateTime;
use PDO;

class EventCollection
{
    /**
     * Returns an array that contains all the instances of Events
     *
     * @return Event[] Array that contains all the instances of Events
     */
    public static function findAll(): array
    {
        $stmt = MyPDO::getInstance()->prepare(
            <<<SQL
                SELECT eventId, eventNom, eventDate, eventDesc, afficheId
                FROM evenement
                ORDER BY eventDate DESC
            SQL
        );

        $stmt->execute();
        $listeChamps = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $listeEvent = [];

        foreach ($listeChamps as $champs) {
            $eventDate = new DateTime($champs['eventDate']);

            $event = new Event(
                $champs['eventId'],
                $champs['eventNom'],
                $eventDate,
                $champs['eventDesc'],
                $champs['afficheId']
            );

            $listeEvent[] = $event;
        }

        //if (($listeEvent = $stmt->fetchAll()) !== false) {
        //    return $listeEvent;
        //}

        return $listeEvent;
    }
}