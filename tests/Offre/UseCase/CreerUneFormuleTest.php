<?php

namespace Acme\Gym\Test\Offre\UseCase;

use Acme\Gym\Offre\UseCase\CreerUneFormule;
use Acme\Gym\Test\Offre\Infrastructure\InMemoryFormuleRepository;
use PHPUnit\Framework\TestCase;

class CreerUneFormuleTest extends TestCase
{
    /**
     * @test
     */
    public function cree_une_formule(): void
    {
        // Arrange
        $id = 1;
        $prix = 100;
        $formuleRepository = new InMemoryFormuleRepository();
        $useCase = new CreerUneFormule($formuleRepository);

        // Act
        $useCase->execute($id, $prix);

        // Assert
        $this->assertTrue(isset($formuleRepository[$id]));
    }
}
