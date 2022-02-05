<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'qwaszx19111999@gmail.com',
    'to' => 'besprozvannykh.aa@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'agree' => array(
    'order' => 3,
    'type' => 'checkbox',
    'label' => 'I accept the Terms of Service',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'I accept the Terms of Service\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Поле ввода',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Поле ввода\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>