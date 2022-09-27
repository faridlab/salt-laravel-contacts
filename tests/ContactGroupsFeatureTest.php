<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactGroupsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_groups';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'name' => 'Happy Hour',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'name' => 1110002,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'name' => 'Happy Work',
    ];

    use ResourceFeatureTestCase;
}
