<?php

namespace App\Tests;

use App\Entity\Oeuvre;
use PHPUnit\Framework\TestCase;
use DateTime;

class OeuvreUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $oeuvre = new Oeuvre();
        $release_date = new DateTime('2024-01-01 00:00:00');
        $closing_date = new DateTime('2024-12-31 23:59:59');

        $oeuvre->setName('name')
               ->setTitle('title')
               ->setDescription('description')
               ->setSlug('slug')
               ->setFile('file')
               ->setReleaseDate($release_date)
               ->setClosingDate($closing_date);


        $this->assertTrue($oeuvre->getName() === 'name');
        $this->assertTrue($oeuvre->getTitle() === 'title');
        $this->assertTrue($oeuvre->getDescription() === 'description');
        $this->assertTrue($oeuvre->getSlug() === 'slug');
        $this->assertTrue($oeuvre->getFile() === 'file');
        $this->assertTrue($oeuvre->getReleaseDate() === $release_date);
        $this->assertTrue($oeuvre->getClosingDate() === $closing_date);
    }

    public function testIsFalse(): void
    {
        $oeuvre = new Oeuvre();
        $release_date = new DateTime('2024-01-01 00:00:00');
        $closing_date = new DateTime('2024-12-31 23:59:59');

        $oeuvre->setName('name')
               ->setTitle('title')
               ->setDescription('description')
               ->setSlug('slug')
               ->setFile('file')
               ->setReleaseDate($release_date)
               ->setClosingDate($closing_date);


        $this->assertFalse($oeuvre->getName() === 'false');
        $this->assertFalse($oeuvre->getTitle() === 'false');
        $this->assertFalse($oeuvre->getDescription() === 'false');
        $this->assertFalse($oeuvre->getSlug() === 'false');
        $this->assertFalse($oeuvre->getFile() === 'false');
        $this->assertFalse($oeuvre->getReleaseDate() === $closing_date);
        $this->assertFalse($oeuvre->getClosingDate() === $release_date);
    }

    public function testIsEmpty(): void
    {
        $oeuvre = new Oeuvre();

        $this->assertEmpty($oeuvre->getName());
        $this->assertEmpty($oeuvre->getTitle());
        $this->assertEmpty($oeuvre->getDescription());
        $this->assertEmpty($oeuvre->getSlug());
        $this->assertEmpty($oeuvre->getFile());
        $this->assertEmpty($oeuvre->getReleaseDate());
        $this->assertEmpty($oeuvre->getClosingDate());
    }
}
