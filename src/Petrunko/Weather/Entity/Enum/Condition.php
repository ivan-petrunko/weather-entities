<?php

declare(strict_types=1);

namespace Petrunko\Weather\Entity\Enum;

class Condition
{
    public const SUNNY = 'sunny';
    public const PARTLY_SUNNY = 'partly_sunny';
    public const RAIN_WITH_SUN = 'rain_with_sun';
    public const RAIN_NIGHT = 'rain_night';
    public const CLOUDY = 'cloudy';
    public const FOG = 'fog';
    public const SNOW = 'snow';
    public const SLEET = 'sleet';
    public const OVERCAST = 'overcast';
    public const SHOWERS = 'showers';
    public const PARTLY_CLOUDY_NIGHT = 'partly_cloudy_night';
    public const CLOUDY_NIGHT = 'cloudy_night';
    public const THUNDER_STORM = 'thunder_storm';
    public const HEAVY_RAIN = 'heavy_rain';
    public const CLEAR_NIGHT = 'clear_night';

    private function __construct()
    {
    }
}
