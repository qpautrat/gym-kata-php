<?php

namespace Acme\Gym\Offre\Domain;

class Formule
{

    /**
     * @param int $id
     */
    public function __construct(private int $id, private int $prix)
    {
        if ($prix < 0) {
            throw new PrixNegatif();
        }
    }

    public function id()
    {
        return $this->id;
    }
}