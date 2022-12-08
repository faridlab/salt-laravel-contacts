<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltContacts\Controllers\ApiNestedResourcesController;

use SaltContacts\Controllers\ContactsResourcesController;
use SaltContacts\Controllers\ContactAddressesResourcesController;
use SaltContacts\Controllers\ContactEmailsResourcesController;
use SaltContacts\Controllers\ContactGroupsResourcesController;
use SaltContacts\Controllers\ContactPhonesResourcesController;
use SaltContacts\Controllers\ContactSocialsResourcesController;
use SaltContacts\Controllers\ContactUrlsResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CONTACTS RESOURCES
    Route::get("contacts", [ContactsResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contacts", [ContactsResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contacts/trash", [ContactsResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contacts/import", [ContactsResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contacts/export", [ContactsResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contacts/report", [ContactsResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contacts/{id}/trashed", [ContactsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contacts/{id}/restore", [ContactsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}/delete", [ContactsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contacts/{id}", [ContactsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contacts/{id}", [ContactsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contacts/{id}", [ContactsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contacts/{id}", [ContactsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    Route::resource('contacts.contact_addresses', ApiNestedResourcesController::class)->middleware(['auth:api']);
    Route::resource('contacts.contact_groups', ApiNestedResourcesController::class)->middleware(['auth:api']);
    Route::resource('contacts.contact_phones', ApiNestedResourcesController::class)->middleware(['auth:api']);
    Route::resource('contacts.contact_emails', ApiNestedResourcesController::class)->middleware(['auth:api']);
    Route::resource('contacts.contact_urls', ApiNestedResourcesController::class)->middleware(['auth:api']);
    Route::resource('contacts.contact_socials', ApiNestedResourcesController::class)->middleware(['auth:api']);

    // API: ADDRESSES RESOURCES
    Route::get("contact_addresses", [ContactAddressesResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_addresses", [ContactAddressesResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_addresses/trash", [ContactAddressesResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_addresses/import", [ContactAddressesResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_addresses/export", [ContactAddressesResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_addresses/report", [ContactAddressesResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_addresses/{id}/trashed", [ContactAddressesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_addresses/{id}/restore", [ContactAddressesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}/delete", [ContactAddressesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_addresses/{id}", [ContactAddressesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_addresses/{id}", [ContactAddressesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_addresses/{id}", [ContactAddressesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_addresses/{id}", [ContactAddressesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    // API: GROUPS RESOURCES
    Route::get("contact_groups", [ContactGroupsResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_groups", [ContactGroupsResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_groups/trash", [ContactGroupsResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_groups/import", [ContactGroupsResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_groups/export", [ContactGroupsResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_groups/report", [ContactGroupsResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_groups/{id}/trashed", [ContactGroupsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_groups/{id}/restore", [ContactGroupsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}/delete", [ContactGroupsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_groups/{id}", [ContactGroupsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_groups/{id}", [ContactGroupsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_groups/{id}", [ContactGroupsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_groups/{id}", [ContactGroupsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    // API: PHONES RESOURCES
    Route::get("contact_phones", [ContactPhonesResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_phones", [ContactPhonesResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_phones/trash", [ContactPhonesResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_phones/import", [ContactPhonesResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_phones/export", [ContactPhonesResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_phones/report", [ContactPhonesResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_phones/{id}/trashed", [ContactPhonesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_phones/{id}/restore", [ContactPhonesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}/delete", [ContactPhonesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_phones/{id}", [ContactPhonesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_phones/{id}", [ContactPhonesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_phones/{id}", [ContactPhonesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_phones/{id}", [ContactPhonesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    // API: EMAILS RESOURCES
    Route::get("contact_emails", [ContactEmailsResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_emails", [ContactEmailsResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_emails/trash", [ContactEmailsResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_emails/import", [ContactEmailsResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_emails/export", [ContactEmailsResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_emails/report", [ContactEmailsResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_emails/{id}/trashed", [ContactEmailsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_emails/{id}/restore", [ContactEmailsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}/delete", [ContactEmailsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_emails/{id}", [ContactEmailsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_emails/{id}", [ContactEmailsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_emails/{id}", [ContactEmailsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_emails/{id}", [ContactEmailsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    // API: URLS RESOURCES
    Route::get("contact_urls", [ContactUrlsResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_urls", [ContactUrlsResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_urls/trash", [ContactUrlsResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_urls/import", [ContactUrlsResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_urls/export", [ContactUrlsResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_urls/report", [ContactUrlsResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_urls/{id}/trashed", [ContactUrlsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_urls/{id}/restore", [ContactUrlsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}/delete", [ContactUrlsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_urls/{id}", [ContactUrlsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_urls/{id}", [ContactUrlsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_urls/{id}", [ContactUrlsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_urls/{id}", [ContactUrlsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

    // API: SOCIAL PROFILES RESOURCES
    Route::get("contact_socials", [ContactSocialsResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contact_socials", [ContactSocialsResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contact_socials/trash", [ContactSocialsResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contact_socials/import", [ContactSocialsResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contact_socials/export", [ContactSocialsResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contact_socials/report", [ContactSocialsResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contact_socials/{id}/trashed", [ContactSocialsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contact_socials/{id}/restore", [ContactSocialsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_socials/{id}/delete", [ContactSocialsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contact_socials/{id}", [ContactSocialsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contact_socials/{id}", [ContactSocialsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contact_socials/{id}", [ContactSocialsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contact_socials/{id}", [ContactSocialsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});
