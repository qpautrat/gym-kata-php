<?php

namespace Acme\Gym\Test\Offre\UseCase;

use Acme\Gym\Offre\Domain\Formule;
use Acme\Gym\Offre\UseCase\ChangerLePrixDeLaFormule;
use Acme\Gym\Test\Offre\Infrastructure\InMemoryFormuleRepository;
use PHPUnit\Framework\TestCase;

class ChangerLePrixDeLaFormuleTest extends TestCase
{
    /**
     * @test
     */
    public function change_le_prix_de_la_formule()
    {
        // Arrange
        $id = 1;
        $prix = 100;
        $formule = new Formule($id, $prix);
        $formuleRepository = new InMemoryFormuleRepository([$id => $formule]);
        $useCase = new ChangerLePrixDeLaFormule($formuleRepository);
        $nouveauPrix = 200;

        // Act
        $useCase->execute($id, $nouveauPrix);

        // Assert
        $this->assertEquals($nouveauPrix, $formuleRepository[$id]->prix());
    }
}
