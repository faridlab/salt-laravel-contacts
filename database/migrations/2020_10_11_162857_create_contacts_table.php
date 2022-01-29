<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('company')->nullable();

            $table->date('bod')->nullable();
            $table->string('prefix')->nullable();
            $table->string('phonetic_first_name')->nullable();
            $table->string('pronunciation_first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('phonetic_middle_name')->nullable();
            $table->string('phonetic_last_name')->nullable();
            $table->string('pronunciation_last_name')->nullable();
            $table->string('maiden_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('job_title')->nullable();
            $table->string('department')->nullable();
            $table->string('phonetic_company_name')->nullable();
            $table->text('note')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
