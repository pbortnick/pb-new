<?php

use SilverStripe\ORM\DataObject;

class Comment extends DataObject
{
    private static $db = [
      'Title' => 'Varchar',
      'Date' => 'Varchar',
      'Comment' => 'Text'
    ];

}
