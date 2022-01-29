<?php

namespace SaltContacts\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;

class Contacts extends Resources {

    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'first_name',
        'last_name',
        'company',
        'bod',
        'prefix',
        'phonetic_first_name',
        'pronunciation_first_name',
        'middle_name',
        'phonetic_middle_name',
        'phonetic_last_name',
        'pronunciation_last_name',
        'maiden_name',
        'suffix',
        'nickname',
        'job_title',
        'department',
        'phonetic_company_name',
        'note'
    ];

    protected $rules = array(
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'company' => 'nullable|string',
        'bod' => 'nullable|date',
        'prefix' => 'nullable|string',
        'phonetic_first_name' => 'nullable|string',
        'pronunciation_first_name' => 'nullable|string',
        'middle_name' => 'nullable|string',
        'phonetic_middle_name' => 'nullable|string',
        'phonetic_last_name' => 'nullable|string',
        'pronunciation_last_name' => 'nullable|string',
        'maiden_name' => 'nullable|string',
        'suffix' => 'nullable|string',
        'nickname' => 'nullable|string',
        'job_title' => 'nullable|string',
        'department' => 'nullable|string',
        'phonetic_company_name' => 'nullable|string',
        'note' => 'nullable|string',
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

    protected $structures = array();
    protected $forms = array();

    protected $searchable = array(
        'first_name',
        'last_name',
        'company',
        'bod',
        'prefix',
        'phonetic_first_name',
        'pronunciation_first_name',
        'middle_name',
        'phonetic_middle_name',
        'phonetic_last_name',
        'pronunciation_last_name',
        'maiden_name',
        'suffix',
        'nickname',
        'job_title',
        'department',
        'phonetic_company_name',
        'note'
    );

    protected $fillable = array(
        'first_name',
        'last_name',
        'company',
        'bod',
        'prefix',
        'phonetic_first_name',
        'pronunciation_first_name',
        'middle_name',
        'phonetic_middle_name',
        'phonetic_last_name',
        'pronunciation_last_name',
        'maiden_name',
        'suffix',
        'nickname',
        'job_title',
        'department',
        'phonetic_company_name',
        'note'
    );

    public function addresses() {
        return $this->hasMany('SaltContacts\Models\ContactAddresses', 'contact_id', 'id');
    }

    public function groups() {
        return $this->hasMany('SaltContacts\Models\ContactGroups', 'contact_id', 'id');
    }

    public function phones() {
        return $this->hasMany('SaltContacts\Models\ContactPhones', 'contact_id', 'id');
    }

    public function emails() {
        return $this->hasMany('SaltContacts\Models\ContactEmails', 'contact_id', 'id');
    }

    public function urls() {
        return $this->hasMany('SaltContacts\Models\ContactUrls', 'contact_id', 'id');
    }

    public function socials() {
        return $this->hasMany('SaltContacts\Models\ContactSocials', 'contact_id', 'id');
    }

}
