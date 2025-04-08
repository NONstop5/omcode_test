<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Rhino extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::RHINO;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::BEDROOM;
    }
}
