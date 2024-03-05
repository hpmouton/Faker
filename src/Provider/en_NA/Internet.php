<?php

namespace Faker\Provider\en_NA;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'webmail.com.na', 'iway.na', 'nust.na', 'unam.na'];

    /**
     * An array of South African TLDs.
     *
     * @see https://en.wikipedia.org/wiki/.za
     * @see https://en.wikipedia.org/wiki/List_of_Internet_top-level_domains#Africa
     *
     * @var array
     */
    protected static $tld = [
        'org', 'africa', 'agric.za', 'co.na', 'com.na', 'com','com',
        'edu.na', 'gov.na', 'mil.na', 'net.na', 'nis.na', 'nom.na', 'org.na', 'school.na', 'web.na',
    ];
}
