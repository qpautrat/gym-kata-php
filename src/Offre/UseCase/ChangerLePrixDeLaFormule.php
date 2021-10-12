<?php

namespace Acme\Gym\Offre\UseCase;

use Acme\Gym\Offre\Domain\FormuleRepository;

class ChangerLePrixDeLaFormule
{
    public function __construct(private FormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id, int $nouveauPrix)
    {
        $formule = $this->formuleRepository->cherche($id);

        $formule->changePrix($nouveauPrix);
    }
}