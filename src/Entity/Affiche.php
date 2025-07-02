<?php

declare(strict_types=1);

namespace Entity;

class Affiche
{
    private int $afficheId;
    private string $jpeg;

    /**
     * Returns the instance of Affiche which is identified by the id in parameter
     *
     * @param $id int id to search
     * @return Affiche that corresponds to the id
     */
    public static function findById(int $id): Genre
    {
        $stmt = MyPDO::getInstance()->prepare(
            <<<'SQL'
                SELECT afficheId, jpeg
                FROM evenement
                WHERE afficheId = ?
                SQL
        );

        $stmt->bindParam(1, $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, Affiche::class);
        //if (($affiche = $stmt->fetch()) === false) {
        //    throw new EntityNotFoundException();
        //}

        return $affiche;
    }

    /**
     * Get the value of afficheId
     */
    public function getAfficheId(): int
    {
        return $this->afficheId;
    }

    /**
     * Get the value of jpeg
     */
    public function getJpeg(): string
    {
        return $this->jpeg;
    }
};