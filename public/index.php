<?php

declare(strict_types=1);

use App\Animal\Bird;
use App\Animal\Dog;
use App\Animal\Elephant;
use App\Animal\Rhino;
use App\AnimalsPlacer;
use App\Room\Balcony;
use App\Room\Bedroom;
use App\Room\Hall;

require_once __DIR__ . '/../vendor/autoload.php';

$animals = [
    new Bird(0.25),
    new Bird(0.25),
    new Dog(0.4),
    new Elephant(0.6),
    new Rhino(0.6),
];

$rooms = [
    new Hall(0.5),
    new Bedroom(0.9),
    new Balcony(1),
];

$animalsPlacer = new AnimalsPlacer();
try {
    $animalsPlacer->place($animals, $rooms);
} catch (Exception $e) {
    print_r($e->getMessage() . PHP_EOL);
}
