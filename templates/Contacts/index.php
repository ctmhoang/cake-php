<?php

use App\Form\ContactForm;
use App\View\AppView;


/**
 * @var AppView $this
 * @var ContactForm $form
 */
echo $this->Form->create($form),
$this->Form->control('name'),
$this->Form->label('email', 'Email'),
$this->Form->email('email'),
$this->Form->submit("Submit"),
$this->Form->end();

