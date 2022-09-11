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

    // API: ADDRESSES RESOURCES
    Route::get("contact_addresses", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_addresses", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_addresses/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_addresses/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_addresses/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_addresses/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_addresses/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_addresses/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_addresses/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_addresses/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_addresses/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: GROUPS RESOURCES
    Route::get("contact_groups", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_groups", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_groups/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_groups/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_groups/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_groups/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_groups/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_groups/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_groups/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_groups/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_groups/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: PHONES RESOURCES
    Route::get("contact_phones", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_phones", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_phones/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_phones/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_phones/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_phones/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_phones/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_phones/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_phones/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_phones/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_phones/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: EMAILS RESOURCES
    Route::get("contact_emails", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_emails", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_emails/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_emails/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_emails/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_emails/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_emails/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_emails/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_emails/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_emails/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_emails/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: URLS RESOURCES
    Route::get("contact_urls", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_urls", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_urls/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_urls/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_urls/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_urls/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_urls/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_urls/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_urls/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_urls/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_urls/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: SOCIAL PROFILES RESOURCES
    Route::get("contact_socials", [ApiContactsResourcesController::class, 'index']); // get entire collection
    Route::post("contact_socials", [ApiContactsResourcesController::class, 'store']); // create new collection

    Route::get("contact_socials/trash", [ApiContactsResourcesController::class, 'trash']); // trash of collection

    Route::post("contact_socials/import", [ApiContactsResourcesController::class, 'import']); // import collection from external
    Route::post("contact_socials/export", [ApiContactsResourcesController::class, 'export']); // export entire collection
    Route::get("contact_socials/report", [ApiContactsResourcesController::class, 'report']); // report collection

    Route::get("contact_socials/{id}/trashed", [ApiContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_socials/{id}/restore", [ApiContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_socials/{id}/delete", [ApiContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("contact_socials/{id}", [ApiContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("contact_socials/{id}", [ApiContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("contact_socials/{id}", [ApiContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_socials/{id}", [ApiContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
