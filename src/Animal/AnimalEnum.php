<?php

declare(strict_types=1);

namespace App\Animal;

enum AnimalEnum: string
{
    case BIRD = 'Bird';
    case DOG = 'Dog';
    case CAT = 'Cat';
    case ELEPHANT = 'Elephant';
    case RHINO = 'Rhino';
    case LION = 'Lion';
    case SQUIRREL = 'Squirrel';
}
