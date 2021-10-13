<?php

namespace Acme\Gym\Souscription\Domain;

interface FormuleReadModel
{
    public function cherche(int $formuleId): array;
}