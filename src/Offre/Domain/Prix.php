<?php

namespace Acme\Gym\Offre\Domain;

class Prix
{
    public function __construct(private int $montant)
    {
        if ($montant < 0) {
            throw new LeMontantNePeutPasEtreNegatif();
        }
    }
}