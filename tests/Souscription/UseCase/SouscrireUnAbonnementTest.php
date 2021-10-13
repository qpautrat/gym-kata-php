<?php

namespace Acme\Gym\Test\Souscription\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\Prix;
use Acme\Gym\Souscription\UseCase\SouscrireUnAbonnement;
use Acme\Gym\Test\Offre\Infrastructure\InMemoryFormuleRepository;
use Acme\Gym\Test\Souscription\Infrastructure\InMemoryAbonnementRepository;
use Acme\Gym\Test\Souscription\Infrastructure\InMemoryFormuleReadModel;
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
        $formuleId = 2;
        $formulePrix = 200;
        $formule = ['montant' => $formulePrix];
        $formuleReadModel = new InMemoryFormuleReadModel([$formuleId => $formule]);
        $useCase = new SouscrireUnAbonnement($abonnementRepository, $formuleReadModel);

        // Act
        $useCase->execute($id, $formuleId);

        // Assert
        $abonnement = $abonnementRepository[$id];
        $this->assertEquals($formulePrix, $abonnement->prix());
    }
}
