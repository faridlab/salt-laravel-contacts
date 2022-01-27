<?php

namespace SaltContacts\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SaltLaravel\Models\Resources;
use Spatie\Permission\Exceptions\UnauthorizedException;
use SaltLaravel\Services\ResponseService;
use SaltLaravel\Controllers\ApiResourcesController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class ApiContactsResourcesController extends ApiResourcesController
{
    protected $modelNamespace = 'SaltContacts';
}
