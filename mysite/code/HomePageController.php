<?php

use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\View\Requirements;

class HomePageController extends PageController
{

  private static $allowed_actions = [
    'ImageCommentForm',
  ];

  public function ImageCommentForm()
  {
    $form = Form::create(
        $this,
        __FUNCTION__,
        FieldList::create(
            TextField::create('Name',''),
            EmailField::create('Email',''),
            TextareaField::create('Comment',''),
            DateField::create('Date','')
        ),
        FieldList::create(
            FormAction::create('submitComment','Submit Comment')
                ->setUseButtonTag(true)
                ->addExtraClass('btn btn-default-color btn-lg')
        ),
        RequiredFields::create('Name','Email','Date','Comment')
    );

    return $form;
  }

  public function submitComment($data, $form)
  {
    $comment = HomePageComment::create();
    $comment->HomePageSlideID = $this->ID;
    $comment->Name = $data['Name'];
    $comment->Email = $data['Email'];
    $date->Date = $data['Date'];
    $comment->Comment = $data['Comment'];

    $form->saveInto($comment);
    $comment->write();

    $form->sessionMessage('Thanks for your comment!','good');

    return $this->redirectBack();
  }
}
