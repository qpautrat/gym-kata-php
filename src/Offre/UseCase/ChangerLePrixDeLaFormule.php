<?php

namespace Acme\Gym\Offre\UseCase;

use Acme\Gym\Offre\Domain\FormuleRepository;
use Acme\Gym\Offre\Domain\Prix;

class ChangerLePrixDeLaFormule
{
    public function __construct(private FormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id, Prix $nouveauPrix)
    {
        $formule = $this->formuleRepository->cherche($id);

        $formule->changePrix($nouveauPrix);
    }
}