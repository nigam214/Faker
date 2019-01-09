<?php

namespace Faker\Provider\hi_IN;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.in', 'live.in', 'yahoo.co.in');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'co.in', 'in', 'in');
}
