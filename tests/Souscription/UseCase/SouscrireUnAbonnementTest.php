<?php

namespace Acme\Gym\Test\Souscription\UseCase;

use Acme\Gym\Souscription\UseCase\SouscrireUnAbonnement;
use Acme\Gym\Test\Souscription\Infrastructure\InMemoryAbonnementRepository;
use PHPUnit\Framework\TestCase;

class SouscrireUnAbonnementTest extends TestCase
{
    /**
     * @test
     */
    public function souscris_un_abonnement()
    {
        // Arrange
        $id = 1;
        $abonnementRepository = new InMemoryAbonnementRepository();
        $useCase = new SouscrireUnAbonnement($abonnementRepository);

        // Act
        $useCase->execute($id);

        // Assert
        $this->assertTrue(isset($abonnementRepository[$id]));
    }
}
