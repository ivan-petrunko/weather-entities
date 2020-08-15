<?php

declare(strict_types=1);

namespace Petrunko\Weather\Entity;

class WeatherDaily
{
    private ?Weather $morningWeather;
    private ?Weather $dayWeather;
    private ?Weather $eveningWeather;
    private ?Weather $nightWeather;

    public function __construct(
        ?Weather $morningWeather = null,
        ?Weather $dayWeather = null,
        ?Weather $eveningWeather = null,
        ?Weather $nightWeather = null
    ) {
        $this->morningWeather = $morningWeather;
        $this->dayWeather = $dayWeather;
        $this->eveningWeather = $eveningWeather;
        $this->nightWeather = $nightWeather;
    }

    public function getMorningWeather(): ?Weather
    {
        return $this->morningWeather;
    }

    public function getDayWeather(): ?Weather
    {
        return $this->dayWeather;
    }

    public function getEveningWeather(): ?Weather
    {
        return $this->eveningWeather;
    }

    public function getNightWeather(): ?Weather
    {
        return $this->nightWeather;
    }
}
