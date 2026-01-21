<?php

declare(strict_types=1);

namespace App\Behavior\Hunt;

use App\Behavior\HuntBehavior;

final class LazyHunt implements HuntBehavior
{
    public function hunt(): string
    {
        return 'too lazy to hunt';
    }
}
