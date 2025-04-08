<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

class Cat extends AnimalAbstract
{
    public function getType(): AnimalEnum
    {
        return AnimalEnum::CAT;
    }

    public function getAllowedRoom(): RoomEnum
    {
        return RoomEnum::BEDROOM;
    }
}
