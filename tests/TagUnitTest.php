<?php

namespace App\Tests;

use App\Entity\Tag;
use PHPUnit\Framework\TestCase;

class TagUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $tag = new Tag();

        $tag->setLibelle('libelle');

        $this->assertTrue($tag->getLibelle() === 'libelle');
    }
    
    public function testIsFalse()
    {
        $tag = new Tag();

        $tag->setLibelle('libelle');

        $this->assertFalse($tag->getLibelle() === 'false');
    }

    public function testIsEmpty()
    {
        $tag = new Tag();

        $this->assertEmpty($tag->getLibelle());
    }
}
