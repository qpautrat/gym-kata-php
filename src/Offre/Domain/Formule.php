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
            throw new LePrixNePeutPasEtreNegatif();
        }
    }

    public function id()
    {
        return $this->id;
    }

    public function prix(): int
    {
        return $this->prix;
    }

    public function changePrix(int $nouveauPrix)
    {
        $this->prix = $nouveauPrix;
    }
}