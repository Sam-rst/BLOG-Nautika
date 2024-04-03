<?php

namespace App\Tests;

use App\Entity\Anime;
use DateTime;
use PHPUnit\Framework\TestCase;

class AnimeUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $anime = new Anime();
        $dateLauched = new DateTime('2023-01-01 00:00:00');
        $dateEnded = new DateTime('2023-12-31 23:59:59');

        $anime->setName('name')
             ->setTitle('title')
             ->setDescription('description')
             ->setSlug('slug')
             ->setFile('file')
             ->setDateLauched($dateLauched)
             ->setDateEnded($dateEnded);

        $this->assertTrue($anime->getName() === 'name');
        $this->assertTrue($anime->getTitle() === 'title');
        $this->assertTrue($anime->getDescription() === 'description');
        $this->assertTrue($anime->getSlug() === 'slug');
        $this->assertTrue($anime->getFile() === 'file');
        $this->assertTrue($anime->getDateLauched() === $dateLauched);
        $this->assertTrue($anime->getDateEnded() === $dateEnded);
    }
    
    public function testIsFalse()
    {
        $anime = new Anime();
        $dateLauched = new DateTime('2023-01-01 00:00:00');
        $dateEnded = new DateTime('2023-12-31 23:59:59');

        $anime->setName('name')
             ->setTitle('title')
             ->setDescription('description')
             ->setSlug('slug')
             ->setFile('file')
             ->setDateLauched($dateLauched)
             ->setDateEnded($dateEnded);

        $this->assertFalse($anime->getName() === 'false');
        $this->assertFalse($anime->getTitle() === 'false');
        $this->assertFalse($anime->getDescription() === 'false');
        $this->assertFalse($anime->getSlug() === 'false');
        $this->assertFalse($anime->getFile() === 'false');
        $this->assertFalse($anime->getDateLauched() === new DateTime('2023-01-01 00:00:00'));
        $this->assertFalse($anime->getDateEnded() === new DateTime('2023-12-31 23:59:59'));
    }

    public function testIsEmpty()
    {
        $anime = new Anime();

        $this->assertEmpty($anime->getName());
        $this->assertEmpty($anime->getTitle());
        $this->assertEmpty($anime->getDescription());
        $this->assertEmpty($anime->getSlug());
        $this->assertEmpty($anime->getDateLauched());
        $this->assertEmpty($anime->getDateEnded());
    }
}
