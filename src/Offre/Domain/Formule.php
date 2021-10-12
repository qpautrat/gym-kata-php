<?php

namespace Acme\Gym\Offre\Domain;

class Formule
{

    /**
     * @param int $id
     */
    public function __construct(private int $id, private Prix $prix)
    {

    }

    public function id()
    {
        return $this->id;
    }

    public function prix(): Prix
    {
        return $this->prix;
    }

    public function changePrix(Prix $nouveauPrix)
    {
        $this->prix = $nouveauPrix;
    }
}