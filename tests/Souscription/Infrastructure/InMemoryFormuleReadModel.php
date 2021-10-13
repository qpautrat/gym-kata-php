<?php

namespace Acme\Gym\Test\Souscription\Infrastructure;

use Acme\Gym\Souscription\Domain\FormuleReadModel;

class InMemoryFormuleReadModel implements FormuleReadModel
{
    /**
     * @param $array
     */
    public function __construct(private array $formules)
    {
    }

    public function cherche(int $formuleId): array
    {
        return $this->formules[$formuleId];
    }
}