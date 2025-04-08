<?php

declare(strict_types=1);

namespace App\Room;

enum RoomEnum: string
{
    case HALL = 'Hall';
    case BEDROOM = 'Bedroom';
    case BATHROOM = 'Bathroom';
    case BALCONY = 'Balcony';
}
