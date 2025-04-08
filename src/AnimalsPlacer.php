<?php

declare(strict_types=1);

namespace App;

use App\Animal\AnimalAbstract;
use App\Room\RoomAbstract;
use Exception;

class AnimalsPlacer
{
    /**
     * @param AnimalAbstract[] $animals
     * @param RoomAbstract[] $rooms
     * @throws Exception
     */
    public function place(array $animals, array $rooms): void
    {
        foreach ($animals as $animal) {
            $isAnimalArranged = false;

            foreach ($rooms as $room) {
                if ($room->getType() === $animal->getAllowedRoom()) {
                    if ($room->getCapacity() >= $animal->getCapacity()) {
                        $room->reduceCapacity($animal->getCapacity());
                        $isAnimalArranged = true;

                        print_r(
                            sprintf(
                                'OK: A new %s just arrived in %s',
                                $animal->getType()->value,
                                $room->getType()->value
                            ) . PHP_EOL
                        );

                        break;
                    }
                }
            }

            if (!$isAnimalArranged) {
                throw new Exception(
                    sprintf(
                        'Error: %s can not be arranged!',
                        $animal->getType()->value
                    )
                );
            }
        }
    }
}
