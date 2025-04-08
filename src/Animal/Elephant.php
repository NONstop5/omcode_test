<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Elephant extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::ELEPHANT;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::BALCONY;
    }
}
