<?php

declare(strict_types=1);

namespace App\Room;

class Balcony extends RoomAbstract
{
    public static function getRoomType(): RoomEnum
    {
        return RoomEnum::BALCONY;
    }
}
