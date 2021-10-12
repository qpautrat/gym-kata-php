<?php

namespace Acme\Gym\Offre\Domain;

class Formule
{

    /**
     * @param int $id
     */
    public function __construct(private int $id)
    {
    }

    public function id()
    {
        return $this->id;
    }
}