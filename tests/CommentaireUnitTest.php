<?php

namespace App\Tests;

use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire();

        $commentaire->setContent('content');

        $this->assertTrue($commentaire->getContent() === 'content');
    }

    public function testIsFalse(): void
    {
        $commentaire = new Commentaire();

        $commentaire->setContent('content');

        $this->assertFalse($commentaire->getContent() === 'false');
    }

    public function testIsEmpty(): void
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getContent());
    }
}
