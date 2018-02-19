<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\DateField;
use PageController;

class SubmissionFormPageController extends PageController
{
    private static $allowed_actions = ['Form'];
    public function Form()
    {
        $fields = new FieldList(
          new TextField('Title'),
          new DateField('Date'),
          new FileField('MyFile')
        );
        $actions = new FieldList(
          new FormAction('doUpload', 'Upload file'),
          new FormAction('submit', 'Submit')
        );
        return new Form($this, 'Form', $fields, $actions);
    }

    public function sendForm($data, $form)
    {
      $title = $data['Title'];
      $upload = $data['MyFile'];

      return $this->redirect('/image-slides');
    }
}
