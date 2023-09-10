<?php

namespace App;

class Poste
{
    private string $poste;

    /**
     * @param string $poste
     */
    public function __construct(string $poste)
    {
        $this->poste = $poste;
    }
}