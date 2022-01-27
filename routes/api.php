<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltContacts\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CONTACTS RESOURCES
    Route::get("contacts", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contacts", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contacts/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contacts/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contacts/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contacts/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contacts/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contacts/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contacts/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contacts/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contacts/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('contacts.contact_addresses', 'ApiNestedResourcesController');
    Route::resource('contacts.contact_groups', 'ApiNestedResourcesController');
    Route::resource('contacts.contact_phones', 'ApiNestedResourcesController');
    Route::resource('contacts.contact_emails', 'ApiNestedResourcesController');
    Route::resource('contacts.contact_urls', 'ApiNestedResourcesController');
    Route::resource('contacts.contact_socials', 'ApiNestedResourcesController');

});
