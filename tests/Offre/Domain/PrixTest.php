<?php

namespace Acme\Gym\Test\Offre\Domain;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\LeMontantNePeutPasEtreNegatif;
use Acme\Gym\Offre\Domain\Prix;
use PHPUnit\Framework\TestCase;

class PrixTest extends TestCase
{
    /**
     * @test
     */
    public function ne_peut_pas_etre_negatif(): void
    {
        // Arrange
        $montant = -100;

        // Act & Assert
        $this->expectException(LeMontantNePeutPasEtreNegatif::class);
        Prix::avecUnMontant($montant);
    }
}
