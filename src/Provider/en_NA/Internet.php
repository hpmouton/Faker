<?php

namespace Faker\Provider\en_NA;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'webmail.com.na', 'iway.na', 'nust.na', 'unam.na'];

    /**
     * An array of Namibian TLDs.
     *
     * @see https://en.wikipedia.org/wiki/.na
     *
     * @var array
     */
    protected static $tld = [
        '.na'
    ];
}
