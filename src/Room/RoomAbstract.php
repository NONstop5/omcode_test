<?php

declare(strict_types=1);

namespace App\Room;

abstract class RoomAbstract
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

    public function reduceCapacity(float $capacity): void
    {
        $this->capacity -= $capacity;
    }

    public function getType(): RoomEnum
    {
        return static::getRoomType();
    }

    abstract public static function getRoomType(): RoomEnum;
}
