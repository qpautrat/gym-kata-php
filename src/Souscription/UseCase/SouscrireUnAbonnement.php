<?php

namespace Acme\Gym\Souscription\UseCase;

use Acme\Gym\Offre\Domain\FormuleRepository;
use Acme\Gym\Souscription\Domain\Abonnement;
use Acme\Gym\Souscription\Domain\AbonnementRepository;

class SouscrireUnAbonnement
{
    public function __construct(private AbonnementRepository $abonnementRepository, private FormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id, int $formuleId)
    {
        $formule = $this->formuleRepository->cherche($formuleId);
        $abonnement = Abonnement::souscris($id, $formule->prix()->montant());
        $this->abonnementRepository->ajoute($abonnement);
    }
}