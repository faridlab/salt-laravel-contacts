<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactPhonesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_phones';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'work',
        'phone' => '+6281111111',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 100,
        'phone' => 1110002,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'mobile',
        'phone' => '+6281111111',
    ];

    use ResourceFeatureTestCase;
}
