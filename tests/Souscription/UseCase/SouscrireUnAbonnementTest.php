<?php

namespace Acme\Gym\Test\Souscription\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\Domain\Prix;
use Acme\Gym\Souscription\UseCase\SouscrireUnAbonnement;
use Acme\Gym\Test\Offre\Infrastructure\InMemoryFormuleRepository;
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
        $formuleId = 2;
        $formulePrix = Prix::avecUnMontant(200);
        $formule = new Formule($formuleId, $formulePrix);
        $formuleRepository = new InMemoryFormuleRepository([$formuleId => $formule]);
        $useCase = new SouscrireUnAbonnement($abonnementRepository, $formuleRepository);

        // Act
        $useCase->execute($id, $formuleId);

        // Assert
        $abonnement = $abonnementRepository[$id];
        $this->assertEquals($formulePrix->montant(), $abonnement->prix());
    }
}
