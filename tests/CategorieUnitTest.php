<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();

        $categorie->setLibelle('libelle');

        $this->assertTrue($categorie->getLibelle() === 'libelle');
    }
    
    public function testIsFalse()
    {
        $categorie = new Categorie();

        $categorie->setLibelle('libelle');

        $this->assertFalse($categorie->getLibelle() === 'false');
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getLibelle());
    }
}
