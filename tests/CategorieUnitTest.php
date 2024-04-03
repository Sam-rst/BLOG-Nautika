<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();

        $categorie->setTitle('title')
                  ->setDescription('description');

        $this->assertTrue($categorie->getTitle() === 'title');
        $this->assertTrue($categorie->getDescription() === 'description');
    }
    
    public function testIsFalse()
    {
        $categorie = new Categorie();

        $categorie->setTitle('title')
                  ->setDescription('description');

        $this->assertFalse($categorie->getTitle() === 'false');
        $this->assertFalse($categorie->getDescription() === 'false');
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getTitle());
        $this->assertEmpty($categorie->getDescription());
    }
}
