<?php

namespace Entity;

use Database\MyPdo;
use Entity\Exception\EntityNotFoundException;
use PDO;

class Photo
{
    private int $id;
    private string $jpeg;

    /**
     * Returns the ID of the Photo.
     *
     * @return int ID of the Photo.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets the ID of the Photo.
     *
     * @param int $id new ID of the Photo.
     * @return void
     */
    private function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns the jpeg of the Photo.
     *
     * @return string jpeg of the Photo.
     */
    public function getJpeg(): string
    {
        return $this->jpeg;
    }

    /**
     * Sets the jpeg of the Photo.
     *
     * @param string $jpeg new jpeg of the Photo.
     * @return void
     */
    private function setDescription(string $jpeg): void
    {
        $this->jpeg = $jpeg;
    }
}