<?php

namespace Faker\Provider\en_NA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+264 81#######',
        '+264 82#######',
        '+264 83#######',
        '+264 85#######',
        '+264 86#######',
        '+264 87#######',
        '+264 88#######',
        '+264 89#######',
    ];

    /**
     * An array of en_NA mobile (cell) phone number formats
     *
     * @var array
     */
    protected static $mobileFormats = [
        // Local
        '081#######',
        '082#######',
        '083#######',
        '085#######',
        '086#######',
        '087#######',
        '088#######',
        '089#######',
        // International
        '+264 81#######',
        '+264 82#######',
        '+264 83#######',
        '+264 85#######',
        '+264 86#######',
        '+264 87#######',
        '+264 88#######',
        '+264 89#######',
    ];

    protected static $e164Formats = [
        '+264#########',
        '+264 ## #######',
        '+264 ## ### ####',
        '+264 ## ## ####',
        '+264 ### ####',
        '+264 #######',
    ];

    /**
     * Return a en_NA mobile phone number
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}

