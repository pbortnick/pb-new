<?php

use SilverStripe\ORM\DataObject;

class HomePageComment extends DataObject
{

    private static $db = [
        'Name' => 'Varchar',
        'Email' => 'Varchar',
        'Date' => 'Date',
        'Comment' => 'Text'
    ];

    private static $has_one = [
        'HomePage' => 'HomePage'
    ];

    // private static $has_one = [
    //     'HomePageSlide' => 'HomePageSlide'
    // ];
}
