<?php

namespace Acme\Gym\Test\Offre\Domain;

use Acme\Gym\Offre\Domain\Formule;
use PHPUnit\Framework\TestCase;

class FormuleTest extends TestCase
{
    /**
     * @test
     */
    public function le_prix_ne_peut_pas_etre_negatif(): void
    {
        // Arrange
        $id = 1;
        $prix = -100;

        // Act & Assert
        $this->expectException(\InvalidArgumentException::class);
        new Formule($id, $prix);
    }
}
