<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltContacts\Controllers\ApiContactsResourcesController;
use SaltContacts\Controllers\ApiNestedResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CONTACTS RESOURCES
    Route::get("contacts", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contacts", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contacts/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contacts/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contacts/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contacts/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contacts/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contacts/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contacts/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contacts/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contacts/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('contacts.contact_addresses', ApiNestedResourcesController::class);
    Route::resource('contacts.contact_groups', ApiNestedResourcesController::class);
    Route::resource('contacts.contact_phones', ApiNestedResourcesController::class);
    Route::resource('contacts.contact_emails', ApiNestedResourcesController::class);
    Route::resource('contacts.contact_urls', ApiNestedResourcesController::class);
    Route::resource('contacts.contact_socials', ApiNestedResourcesController::class);

});
