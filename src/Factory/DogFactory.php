<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\Dog;
use App\Entity\Dog\Dachshund;
use App\Entity\Dog\Mops;
use App\Entity\Dog\PlushLabrador;
use App\Entity\Dog\RubberDachshund;
use App\Entity\Dog\ShibaInu;
use InvalidArgumentException;

final class DogFactory
{
    public static function create(string $breed): Dog
    {
        $key = strtolower($breed);

        return match ($key) {
            'shiba', 'shiba-inu', 'shibainu' => new ShibaInu(),
            'mops', 'pug' => new Mops(),
            'dachshund', 'taxa', 'taksa' => new Dachshund(),
            'plush-labrador', 'plushlab', 'plushlabrodor', 'plush-lab' => new PlushLabrador(),
            'rubber-dachshund', 'rubber-taksa', 'squeaky-dachshund' => new RubberDachshund(),
            default => throw new InvalidArgumentException("Unknown breed: {$breed}"),
        };
    }
}
