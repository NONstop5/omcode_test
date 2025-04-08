<?php

declare(strict_types=1);

namespace App\Animal;

use App\Room\RoomEnum;

abstract class AnimalAbstract
{
    protected float $capacity;

    public function __construct(float $capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCapacity(): float
    {
        return $this->capacity;
    }

    abstract public function getAllowedRoom(): RoomEnum;

    abstract public function getType(): AnimalEnum;
}
