<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')->constrained('contacts');

            $table->enum('type', ['school', 'work', 'home', 'other'])->default('home');
            $table->string('type_other')->nullable();

            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();

            $table->string('address', 512);
            $table->string('address2', 512);
            $table->string('postalcode', 5);
            $table->float('latitude', 11, 8)->nullable();
            $table->float('longitude', 11, 8)->nullable();

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
        Schema::dropIfExists('addresses');
    }
}
