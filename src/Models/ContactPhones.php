<?php

namespace SaltContacts\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class ContactPhones extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'limit',
        'page',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'contact_id',
        'type',
        'phone',
    ];

    protected $rules = array(
        'contact_id' => 'required|integer',
        'type' => 'required|string',
        'phone' => 'required|string'
    );

    protected $auths = array (
        'index',
        'store',
        'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $forms = array();
    protected $structures = array();

    protected $searchable = array(
        'contact_id',
        'type',
        'phone',
    );

    protected $fillable = array(
        'contact_id',
        'type',
        'phone',
    );

    protected $casts = [
        'contact' => 'array',
    ];

    public function contact() {
        return $this->belongsTo('SaltContacts\Models\Contacts', 'contact_id', 'id')->withTrashed();
    }

}
