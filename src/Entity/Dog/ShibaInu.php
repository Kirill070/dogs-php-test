<?php

declare(strict_types=1);

namespace App\Entity\Dog;

use App\Behavior\Hunt\ActiveHunt;
use App\Behavior\Sound\BarkSound;
use App\Entity\Dog;

final class ShibaInu extends Dog
{
    public function __construct()
    {
        parent::__construct(new BarkSound(), new ActiveHunt());
    }
}
