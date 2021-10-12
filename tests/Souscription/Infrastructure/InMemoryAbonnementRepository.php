<?php

namespace Acme\Gym\Test\Souscription\Infrastructure;

use Acme\Gym\Souscription\Domain\Abonnement;
use Acme\Gym\Souscription\Domain\AbonnementRepository;

class InMemoryAbonnementRepository implements AbonnementRepository, \ArrayAccess
{

    public function __construct(private array $abonnements = [])
    {
    }

    public function offsetExists($offset)
    {
        return isset($this->abonnements[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->abonnements[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function ajoute(Abonnement $abonnement)
    {
        $this->abonnements[$abonnement->id()] = $abonnement;
    }
}