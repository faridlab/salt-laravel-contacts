<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ContactsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/contacts';
    protected $postData = [
        'first_name' => 'Farid',
        'last_name' => 'Hidayat',
    ];

    protected $putDataInvalid = [
        'first_name' => 10000
    ];

    protected $putDataValid = [
        'first_name' => '[UPDATED] Farid',
        'last_name' => 'Hidayat',
    ];

    use ResourceFeatureTestCase;
}
