<?php

namespace Acme\Gym\Offre\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\FormuleRepository;

class CreerUneFormule
{
    public function __construct(private FormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id)
    {
        $formule = new Formule($id);
        $this->formuleRepository->ajoute($formule);
    }
}