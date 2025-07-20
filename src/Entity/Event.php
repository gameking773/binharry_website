<?php

declare(strict_types=1);

namespace Entity;

use Database\MyPdo;
use \DateTime as DateTime;
use PDO;

class Event
{
    private int $eventId;
    private String $eventNom;
    private DateTime $eventDate;
    private String $eventDesc;
    private ?int $afficheId;

    /**
     * Get the value of eventId
     */
    public function getEventId(): int
    {
        return $this->eventId;
    }

    /**
     * Set the value of eventId
     */
    private function setEventId(int $eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get the value of eventNom
     */
    public function getEventNom(): String
    {
        return $this->eventNom;
    }

    /**
     * Set the value of eventNom
     */
    public function setEventNom(String $eventNom): self
    {
        $this->eventNom = $eventNom;

        return $this;
    }

    /**
     * Get the value of eventDate
     */
    public function getEventDate(): DateTime
    {
        return $this->eventDate;
    }

    /**
     * Set the value of eventDate
     */
    public function setEventDate(DateTime $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get the value of eventDesc
     */
    public function getEventDesc(): String
    {
        return $this->eventDesc;
    }

    /**
     * Set the value of eventDesc
     */
    public function setEventDesc(String $eventDesc): self
    {
        $this->eventDesc = $eventDesc;

        return $this;
    }

    /**
     * Get the value of afficheId
     */
    public function getAfficheId(): ?int
    {
        return $this->afficheId;
    }

    /**
     * Set the value of afficheId
     */
    public function setAfficheId(?int $afficheId): self
    {
        $this->afficheId = $afficheId;

        return $this;
    }

    public function __construct(int $eventId, String $eventNom, DateTime $eventDate, String $eventDesc, ?int $afficheId){
        $this->eventId = $eventId;
        $this->eventNom = $eventNom;
        $this->eventDate = clone $eventDate;
        $this->eventDesc = $eventDesc;
        $this->afficheId = $afficheId;
    }

    /**
     * Returns the instance of Event which is identified by the id in parameter
     *
     * @param $id int id to search
     * @return Event that corresponds to the id
     */
    public static function findById(int $id): Event
    {
        $stmt = MyPDO::getInstance()->prepare(
            <<<'SQL'
                SELECT eventId, eventNom, eventDate, eventDesc, afficheId
                FROM evenement
                WHERE eventId = ?
                SQL
        );

        $stmt->bindParam(1, $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, Event::class);
        if (($event = $stmt->fetch()) === false) {
            throw new EntityNotFoundException();
        }

        return $event;
    }
};