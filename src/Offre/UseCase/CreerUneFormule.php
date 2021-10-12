<?php

namespace Acme\Gym\Offre\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\FormuleRepository;
use Acme\Gym\Offre\Domain\Prix;

class CreerUneFormule
{
    public function __construct(private FormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id, Prix $prix)
    {
        $formule = new Formule($id, $prix);
        $this->formuleRepository->ajoute($formule);
    }
}