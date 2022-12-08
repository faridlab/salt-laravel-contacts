<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->foreignUuid('group_id')->nullable()->references('id')->on('contact_groups');
            });
        });

        Schema::table('contact_groups', function (Blueprint $table) {
            $table->dropForeign('contact_groups_contact_id_foreign');
            $table->dropColumn('contact_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
