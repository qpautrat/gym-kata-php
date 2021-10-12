<?php

namespace Acme\Gym\Offre\Domain;

interface FormuleRepository
{
    public function ajoute(Formule $formule): void;

    public function cherche(int $id): Formule;
}