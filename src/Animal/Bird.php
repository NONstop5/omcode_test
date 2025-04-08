<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Bird extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::BIRD;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::HALL;
    }
}
