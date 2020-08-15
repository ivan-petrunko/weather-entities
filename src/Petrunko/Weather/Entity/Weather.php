<?php

declare(strict_types=1);

namespace Petrunko\Weather\Entity;

use Petrunko\Weather\Entity\Enum\Condition;
use Petrunko\Weather\Entity\Enum\WindDirection;

class Weather
{
    /**
     * @var string
     * @see Condition
     */
    private string $condition;
    private float $temperatureMin;
    private float $temperatureMax;
    private float $temperatureFeelsLikeMin;
    private float $temperatureFeelsLikeMax;
    /**
     * @var string
     * @see WindDirection
     */
    private string $windDirection;
    private float $windSpeed;
    private int $pressure;
    private int $humidity;

    public function __construct(
        string $condition,
        float $temperatureMin,
        float $temperatureMax,
        float $temperatureFeelsLikeMin,
        float $temperatureFeelsLikeMax,
        string $windDirection,
        float $windSpeed,
        int $pressure,
        int $humidity
    ) {
        $this->condition = $condition;
        $this->temperatureMin = $temperatureMin;
        $this->temperatureMax = $temperatureMax;
        $this->temperatureFeelsLikeMin = $temperatureFeelsLikeMin;
        $this->temperatureFeelsLikeMax = $temperatureFeelsLikeMax;
        $this->windDirection = $windDirection;
        $this->windSpeed = $windSpeed;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    public function getTemperatureMin(): float
    {
        return $this->temperatureMin;
    }

    public function getTemperatureMax(): float
    {
        return $this->temperatureMax;
    }

    public function getTemperatureFeelsLikeMin(): float
    {
        return $this->temperatureFeelsLikeMin;
    }

    public function getTemperatureFeelsLikeMax(): float
    {
        return $this->temperatureFeelsLikeMax;
    }

    public function getWindDirection(): string
    {
        return $this->windDirection;
    }

    public function getWindSpeed(): float
    {
        return $this->windSpeed;
    }

    public function getPressure(): int
    {
        return $this->pressure;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }
}
