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

    // API: ADDRESSES RESOURCES
    Route::get("contact_addresses", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contact_addresses", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contact_addresses/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contact_addresses/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contact_addresses/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contact_addresses/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contact_addresses/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_addresses/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contact_addresses/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contact_addresses/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contact_addresses/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    // API: GROUPS RESOURCES
    Route::get("contact_groups", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contact_groups", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contact_groups/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contact_groups/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contact_groups/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contact_groups/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contact_groups/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_groups/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contact_groups/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contact_groups/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contact_groups/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    // API: PHONES RESOURCES
    Route::get("contact_phones", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contact_phones", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contact_phones/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contact_phones/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contact_phones/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contact_phones/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contact_phones/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_phones/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contact_phones/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contact_phones/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contact_phones/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    // API: EMAILS RESOURCES
    Route::get("contact_emails", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contact_emails", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contact_emails/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contact_emails/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contact_emails/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contact_emails/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contact_emails/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_emails/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contact_emails/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contact_emails/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contact_emails/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    // API: URLS RESOURCES
    Route::get("contact_urls", 'ApiContactsResourcesController@index'); // get entire collection
    Route::post("contact_urls", 'ApiContactsResourcesController@store'); // create new collection

    Route::get("contact_urls/trash", 'ApiContactsResourcesController@trash'); // trash of collection

    Route::post("contact_urls/import", 'ApiContactsResourcesController@import'); // import collection from external
    Route::post("contact_urls/export", 'ApiContactsResourcesController@export'); // export entire collection
    Route::get("contact_urls/report", 'ApiContactsResourcesController@report'); // report collection

    Route::get("contact_urls/{id}/trashed", 'ApiContactsResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_urls/{id}/restore", 'ApiContactsResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}/delete", 'ApiContactsResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("contact_urls/{id}", 'ApiContactsResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("contact_urls/{id}", 'ApiContactsResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("contact_urls/{id}", 'ApiContactsResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}", 'ApiContactsResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

});
