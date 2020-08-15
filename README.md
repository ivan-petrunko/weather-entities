# PHP Weather Entities

## Installation
It's recommended that you use [Composer](https://getcomposer.org/) to install PHP Weather Entities.

```bash
$ composer require ivan-petrunko/weather-entities
```

## Petrunko\Weather\Entity\Weather
Contains snapshot of a weather:
* condition (see `Petrunko\Weather\Entity\Enum\Condition`)
* temperature range
* temperature "feels like" range
* wind direction (see `Petrunko\Weather\Entity\Enum\WindDirection`)
* wind speed
* pressure
* humidity

## Petrunko\Weather\Entity\WeatherDaily
Contains weather for a whole day (morning, day, evening & night).

## P.S.
Feel free to use it however you want :)

Pull requests are welcome.
