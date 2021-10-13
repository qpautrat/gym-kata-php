<?php

namespace Acme\Gym\Souscription\UseCase;

use Acme\Gym\Souscription\Domain\Abonnement;
use Acme\Gym\Souscription\Domain\AbonnementRepository;
use Acme\Gym\Souscription\Domain\FormuleReadModel;

class SouscrireUnAbonnement
{
    public function __construct(private AbonnementRepository $abonnementRepository, private FormuleReadModel $formuleReadModel)
    {
    }

    public function execute(int $id, int $formuleId)
    {
        $formule = $this->formuleReadModel->cherche($formuleId);
        $abonnement = Abonnement::souscris($id, $formule['montant']);
        $this->abonnementRepository->ajoute($abonnement);
    }
}