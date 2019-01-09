<?php

namespace Faker\Provider\hi_IN;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a') === 'am' ? 'am' : 'pm';
    }

    public static function dayOfWeek($max = 'now')
    {
        $map = array(
            'Sunday' => 'रविवार',
            'Monday' => 'सोमवार',
            'Tuesday' => 'मंगलवार',
            'Wednesday' => 'बुधवार',
            'Thursday' => 'गुरुवार',
            'Friday' => 'शुक्रवार',
            'Saturday' => 'शनिवार',
        );
        $week = static::dateTime($max)->format('l');
        return isset($map[$week]) ? $map[$week] : $week;
    }

    public static function monthName($max = 'now')
    {
        $map = array(
            'January' => 'जनवरी',
            'February' => 'फ़रवरी',
            'March' => 'मार्च',
            'April' => 'अप्रैल',
            'May' => 'मई',
            'June' => 'जून',
            'July' => 'जुलाई',
            'August' => 'अगस्त',
            'September' => 'सितंबर',
            'October' => 'अक्टूबर',
            'November' => 'नवंबर',
            'December' => 'दिसंबर',
        );
        $month = static::dateTime($max)->format('F');
        return isset($map[$month]) ? $map[$month] : $month;
    }
}
