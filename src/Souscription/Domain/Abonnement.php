<?php

namespace Acme\Gym\Souscription\Domain;

class Abonnement
{
    private int $id;
    private int $prix;

    private function __construct()
    {
    }


    public static function souscris(int $id, int $prix): self
    {
        $self = new self;
        $self->id = $id;
        $self->prix = $prix;

        return $self;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function prix(): int
    {
        return $this->prix;
    }
}