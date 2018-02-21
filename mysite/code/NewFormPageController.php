<?php

use PageController;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataObject;

class NewForm extends DataObject {
  private static $db =
    array('Continent' => "Varchar(100)");
}

class NewFormPageController extends PageController
{
    private static $allowed_actions = [
        'NewForm'
    ];

    public function NewForm()
    {
        $fields =
        new FieldList(
            TextField::create('Name', 'Your Name'),
            DropdownField::create( 'Continent', 'Continent', array('North America'=>'North America','South America'=>'South America','Africa'=>'Africa', 'Asia'=>'Asia', 'Europe'=>'Europe', 'Antarctica'=>'Antarctica', 'Australia'=>'Australia')),
            TextField::create('Age', 'Your Age'),
            TextField::create('Phone', 'Your Phone Number')
        );

        $actions = new FieldList(
            FormAction::create('doPerson')->setTitle('Descibe Person')
        );

        $required = new RequiredFields('Name', 'Continent', 'Age', 'Phone');

        $form = new Form($this, 'NewForm', $fields, $actions, $required);

        return $form;
    }

    public function doPerson($data, Form $form)
    {
        $form->sessionMessage('Hello ' . $data['Name'] . ' from ' . $data['Continent'] . '. You are '  . $data['Age'] . ' years old and can be reached at ' . $data['Phone'] . '.', 'success');

        return $this->redirectBack();
    }
}
