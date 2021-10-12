<?php

namespace Acme\Gym\Souscription\UseCase;

use Acme\Gym\Souscription\Domain\Abonnement;
use Acme\Gym\Souscription\Domain\AbonnementRepository;

class SouscrireUnAbonnement
{
    public function __construct(private AbonnementRepository $abonnementRepository)
    {
    }

    public function execute(int $id)
    {
        $abonnement = Abonnement::souscris($id);
        $this->abonnementRepository->ajoute($abonnement);
    }
}