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
  public function CommentForm()
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
            FormAction::create('handleComment','Submit Comment')
        ),
        RequiredFields::create('Name','Email','Comment')
    );

    return $form;
  }
}
