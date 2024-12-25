<?php

namespace Tests\Unit;

use App\Services\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    /**
     * Test de la méthode additionner.
     *
     * @return void
     */
    public function testAdditionner()
    {
        $calculatrice = new Calculatrice();

        $resultat = $calculatrice->additionner(2, 3);

        $this->assertEquals(5, $resultat);
    }
}
