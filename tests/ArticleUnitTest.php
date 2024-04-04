<?php

namespace App\Tests;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $article = new Article();

        $article->setTitle('title')
                ->setDescription('description');

        $this->assertTrue($article->getTitle() === 'title');
        $this->assertTrue($article->getDescription() === 'description');
    }

    public function testIsFalse(): void
    {
        $article = new Article();

        $article->setTitle('title')
                ->setDescription('description');

        $this->assertFalse($article->getTitle() === 'false');
        $this->assertFalse($article->getDescription() === 'false');
    }

    public function testIsEmpty(): void
    {
        $article = new Article();

        $this->assertEmpty($article->getTitle());
        $this->assertEmpty($article->getDescription());
    }
}
