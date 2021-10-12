<?php

namespace Acme\Gym\Test\Offre\Infrastructure;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\FormuleRepository;

class InMemoryFormuleRepository implements FormuleRepository, \ArrayAccess
{
    public function __construct(private array $formules = [])
    {
    }

    public function offsetExists($offset)
    {
        return isset($this->formules[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->formules[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function ajoute(Formule $formule): void
    {
        $this->formules[$formule->id()] = $formule;
    }

    public function cherche(int $id): Formule
    {
        return $this->formules[$id];
    }
}