<?php

class Appartement extends Habitation
{
    private bool $garage;

    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces, bool $gara)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);

        $this->garage = $gara;
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
}