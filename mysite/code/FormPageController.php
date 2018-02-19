<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\DateField;
use PageController;

class ContactPageController extends PageController
{
    private static $allowed_actions = ['Form'];
    public function Form()
    {
        $fields = new FieldList(
            new TextField('Name'),
            new DateField('Date'),
            new TextareaField('Comment')
        );
        $actions = new FieldList(
            new FormAction('submit', 'Submit')
        );
        $validator = new RequiredFields('Name', 'Message');
        return new Form($this, 'Form', $fields, $actions, $validator);
    }

}