<?php
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;

use PageController;

class SubmissionFormPageController extends PageController
{
  private static $allowed_actions = [
    'NewSubmissionForm'
  ];

  public function NewSubmissionForm()
  {
    $fields = new FieldList(
      TextField::create('Title','Title'),
      DateField::create('Date','Date'),
      TextareaField::create('Comment','Comment')
    );
    $actions = new FieldList(
      new FormAction('sendSubmissionForm')
    );

    $form = new Form($this, 'NewSubmissionForm', $fields, $actions);

    return $form;
  }

  public function sendSubmissionForm($data, $form)
  {
    $title = $data['Title'];
    $date = $data['Date'];
    $comment = $data['Comment'];

    return $this->redirectBack();
  }
}
