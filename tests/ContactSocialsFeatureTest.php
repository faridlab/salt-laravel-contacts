<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactSocialsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_socials';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'facebook',
        'url' => 'https://fb.me/faridlab',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 100,
        'url' => 1110002,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'twitter',
        'url' => 'https://fb.me/faridlab',
    ];

    use ResourceFeatureTestCase;
}
