<?php

declare(strict_types=1);

namespace App\Entity\Dog;

use App\Behavior\Hunt\NoHunt;
use App\Behavior\Sound\SilentSound;
use App\Entity\Dog;

final class PlushLabrador extends Dog
{
    public function __construct()
    {
        parent::__construct(new SilentSound(), new NoHunt());
    }
}
