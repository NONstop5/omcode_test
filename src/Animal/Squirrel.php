<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Squirrel extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::SQUIRREL;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::BALCONY;
    }
}
