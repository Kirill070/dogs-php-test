<?php

declare(strict_types=1);

namespace App\Entity\Dog;

use App\Behavior\Hunt\NoHunt;
use App\Behavior\Sound\SqueakSound;
use App\Entity\Dog;

final class RubberDachshund extends Dog
{
    public function __construct()
    {
        parent::__construct(new SqueakSound(), new NoHunt());
    }
}
