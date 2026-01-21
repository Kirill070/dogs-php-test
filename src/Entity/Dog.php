<?php

declare(strict_types=1);

namespace App\Entity;

use App\Behavior\HuntBehavior;
use App\Behavior\SoundBehavior;

abstract class Dog
{
    protected SoundBehavior $soundBehavior;
    protected HuntBehavior $huntBehavior;

    public function __construct(SoundBehavior $soundBehavior, HuntBehavior $huntBehavior)
    {
        $this->soundBehavior = $soundBehavior;
        $this->huntBehavior = $huntBehavior;
    }

    public function sound(): string
    {
        return $this->soundBehavior->sound();
    }

    public function hunt(): string
    {
        return $this->huntBehavior->hunt();
    }
}
