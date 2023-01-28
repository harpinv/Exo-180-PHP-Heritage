<?php

require './classes/Habitation.php';

class Maison extends Habitation
{
    private bool $jardin;
    private int $etages;
    private bool $garage;

    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces, bool $jard, int $etag, bool $gara)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);

        $this->jardin = $jard;
        $this->etages = $etag;
        $this->garage = $gara;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function getGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

    /**
     * @return bool
     */
    public function getJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }
}