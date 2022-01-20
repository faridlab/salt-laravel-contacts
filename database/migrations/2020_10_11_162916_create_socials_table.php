<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_socials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')->constrained('contacts');
            $table->enum('type', ['facebook', 'twitter', 'instagram', 'tiktok', 'github', 'gitlab', 'bitbucket', 'telegram', 'pinterest', 'linkedin', 'youtube', 'other'])->default('facebook');
            $table->string('url');
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
