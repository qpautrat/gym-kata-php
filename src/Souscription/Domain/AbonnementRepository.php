<?php

namespace Acme\Gym\Souscription\Domain;

interface AbonnementRepository
{
    public function ajoute(Abonnement $abonnement);
}