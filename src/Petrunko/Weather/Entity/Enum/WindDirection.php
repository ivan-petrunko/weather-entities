<?php

declare(strict_types=1);

namespace Petrunko\Weather\Entity\Enum;

class WindDirection
{
    public const N = 'N';
    public const NE = 'NE';
    public const E = 'E';
    public const SE = 'SE';
    public const S = 'S';
    public const SW = 'SW';
    public const W = 'W';
    public const NW = 'NW';

    private function __construct()
    {
    }
}
