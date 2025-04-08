<?php

declare(strict_types=1);

namespace App\Room;

class Hall extends RoomAbstract
{
    public static function getRoomType(): RoomEnum
    {
        return RoomEnum::HALL;
    }
}
