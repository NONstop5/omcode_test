<?php

declare(strict_types=1);

namespace App\Room;

class Bedroom extends RoomAbstract
{
    public static function getRoomType(): RoomEnum
    {
        return RoomEnum::BEDROOM;
    }
}
