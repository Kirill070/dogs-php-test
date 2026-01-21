<?php

declare(strict_types=1);

namespace App\Behavior\Hunt;

use App\Behavior\HuntBehavior;

final class NoHunt implements HuntBehavior
{
    public function hunt(): string
    {
        return "can't hunt";
    }
}
