<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPassword('password')
            ->setPseudo('pseudo')
            ->setFirstname('firstname')
            ->setLastname('lastname');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getPseudo() === 'pseudo');
        $this->assertTrue($user->getFirstname() === 'firstname');
        $this->assertTrue($user->getLastname() === 'lastname');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPassword('password')
            ->setPseudo('pseudo')
            ->setFirstname('firstname')
            ->setLastname('lastname');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getPseudo() === 'false');
        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getLastname() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getPseudo());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getLastname());
    }
}
