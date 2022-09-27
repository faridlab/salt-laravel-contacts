<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactAddressesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contact_addresses';
    protected $postData = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'home',
        'address' => 'Pondok Cabe ilir',
    ];

    protected $putDataInvalid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'home',
        'address' => 100000,
    ];

    protected $putDataValid = [
        'contact_id' => 'd703df51-3668-4350-aa04-68f157784a82',
        'type' => 'home',
        'address' => '[UPDATED] Veteran Bintaro',
    ];

    use ResourceFeatureTestCase;
}
