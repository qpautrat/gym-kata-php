<?php

namespace Acme\Gym\Offre\Domain;

interface FormuleRepository
{
    public function ajoute(Formule $formule): void;
}