<?php

declare(strict_types=1);

namespace App\Room;

class Bathroom extends RoomAbstract
{
    public static function getRoomType(): RoomEnum
    {
        return RoomEnum::BATHROOM;
    }
}
