<?php

declare(strict_types=1);

namespace App\Behavior\Sound;

use App\Behavior\SoundBehavior;

final class SqueakSound implements SoundBehavior
{
    public function sound(): string
    {
        return 'squeak! squeak!';
    }
}
