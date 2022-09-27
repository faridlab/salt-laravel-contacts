<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactUrlsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_urls';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'home',
        'url' => 'https://faridlab.me',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 100,
        'url' => 1110002,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'work',
        'url' => 'https://startapp.id',
    ];

    use ResourceFeatureTestCase;
}
