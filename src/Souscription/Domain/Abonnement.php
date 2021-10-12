<?php

namespace Acme\Gym\Souscription\Domain;

class Abonnement
{
    private int $id;

    private function __construct()
    {
    }


    public static function souscris(int $id): self
    {
        $self = new self;
        $self->id = $id;

        return $self;
    }

    public function id(): int
    {
        return $this->id;
    }
}