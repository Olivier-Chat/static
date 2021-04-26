<?php
class Speedometer
{
    public const MILE_CONVERT_RATE = 0.621;

    public static function convertKmToMiles(float $km): float
    {
        return $km * self::MILE_CONVERT_RATE;
    }
}