<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactEmailsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_emails';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'work',
        'email' => 'farid@startapp.id',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'work',
        'email' => 100000,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'home',
        'email' => 'farid@startapp.id',
    ];

    use ResourceFeatureTestCase;
}
