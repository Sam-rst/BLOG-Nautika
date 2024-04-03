<?php

namespace App\Tests;

use App\Entity\Manga;
use DateTime;
use PHPUnit\Framework\TestCase;

class MangaUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $manga = new Manga();
        $dateLauched = new DateTime('2023-01-01 00:00:00');
        $dateEnded = new DateTime('2023-12-31 23:59:59');

        $manga->setName('name')
             ->setTitle('title')
             ->setDescription('description')
             ->setSlug('slug')
             ->setFile('file')
             ->setDateLauched($dateLauched)
             ->setDateEnded($dateEnded);

        $this->assertTrue($manga->getName() === 'name');
        $this->assertTrue($manga->getTitle() === 'title');
        $this->assertTrue($manga->getDescription() === 'description');
        $this->assertTrue($manga->getSlug() === 'slug');
        $this->assertTrue($manga->getFile() === 'file');
        $this->assertTrue($manga->getDateLauched() === $dateLauched);
        $this->assertTrue($manga->getDateEnded() === $dateEnded);
    }
    
    public function testIsFalse()
    {
        $manga = new Manga();
        $dateLauched = new DateTime('2023-01-01 00:00:00');
        $dateEnded = new DateTime('2023-12-31 23:59:59');

        $manga->setName('name')
             ->setTitle('title')
             ->setDescription('description')
             ->setSlug('slug')
             ->setFile('file')
             ->setDateLauched($dateLauched)
             ->setDateEnded($dateEnded);

        $this->assertFalse($manga->getName() === 'false');
        $this->assertFalse($manga->getTitle() === 'false');
        $this->assertFalse($manga->getDescription() === 'false');
        $this->assertFalse($manga->getSlug() === 'false');
        $this->assertFalse($manga->getFile() === 'false');
        $this->assertFalse($manga->getDateLauched() === new DateTime('2023-01-01 00:00:00'));
        $this->assertFalse($manga->getDateEnded() === new DateTime('2023-12-31 23:59:59'));
    }

    public function testIsEmpty()
    {
        $manga = new Manga();

        $this->assertEmpty($manga->getName());
        $this->assertEmpty($manga->getTitle());
        $this->assertEmpty($manga->getDescription());
        $this->assertEmpty($manga->getSlug());
        $this->assertEmpty($manga->getDateLauched());
        $this->assertEmpty($manga->getDateEnded());
    }
}
