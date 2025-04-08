<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Lion extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::LION;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::HALL;
    }
}
