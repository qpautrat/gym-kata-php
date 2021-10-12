<?php

namespace Acme\Gym\Offre\Domain;

class Prix
{
    public static function avecUnMontant(int $montant): self
    {
        $self = new self;
        if ($montant < 0) {
            throw new LeMontantNePeutPasEtreNegatif();
        }
        $self->montant = $montant;

        return $self;
    }

    private function __construct()
    {

    }
}