<?php


namespace Faker;

/**
 * Base Faker class, consisting of helper methods for selecting and formatting fake data.
 *
 * @abstract
 */
abstract class Faker
{
    protected static function numerify($numberString)
    {
        return preg_replace_callback("/#/", function () {
            return rand(0, 9);
        }, $numberString);
    }

    protected static function letterify($letterString)
    {
        return preg_replace_callback("/\?/", function () {
            return chr(rand(97, 122));
        }, $letterString);
    }

    protected static function bothify($string)
    {
        return self::letterify(self::numerify($string));
    }

    protected static function pickOne(array $options)
    {
        return $options[array_rand($options)];
    }
}
