<?php

declare(strict_types=1);

use App\Entity\Dog\Dachshund;
use App\Entity\Dog\Mops;
use App\Entity\Dog\PlushLabrador;
use App\Entity\Dog\RubberDachshund;
use App\Entity\Dog\ShibaInu;
use PHPUnit\Framework\TestCase;

final class DogBehaviorTest extends TestCase
{
    public function testShibaInuBehaviors(): void
    {
        $dog = new ShibaInu();

        self::assertSame('woof! woof!', $dog->sound());
        self::assertSame('hunting!', $dog->hunt());
    }

    public function testMopsBehaviors(): void
    {
        $dog = new Mops();

        self::assertSame('woof! woof!', $dog->sound());
        self::assertSame('too lazy to hunt', $dog->hunt());
    }

    public function testDachshundBehaviors(): void
    {
        $dog = new Dachshund();

        self::assertSame('woof! woof!', $dog->sound());
        self::assertSame('hunting!', $dog->hunt());
    }

    public function testPlushLabradorBehaviors(): void
    {
        $dog = new PlushLabrador();

        self::assertSame('silent', $dog->sound());
        self::assertSame("can't hunt", $dog->hunt());
    }

    public function testRubberDachshundBehaviors(): void
    {
        $dog = new RubberDachshund();

        self::assertSame('squeak! squeak!', $dog->sound());
        self::assertSame("can't hunt", $dog->hunt());
    }
}
