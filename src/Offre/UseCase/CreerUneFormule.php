<?php

namespace Acme\Gym\Offre\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Test\Offre\Infrastructure\InMemoryFormuleRepository;

class CreerUneFormule
{
    public function __construct(private InMemoryFormuleRepository $formuleRepository)
    {
    }

    public function execute(int $id)
    {
        $formule = new Formule($id);
        $this->formuleRepository->ajoute($formule);
    }
}