<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Dog extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::DOG;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::BEDROOM;
    }
}
