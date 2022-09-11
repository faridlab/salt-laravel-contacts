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
        Schema::create('contact_socials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('contact_id')->references('id')->on('contacts');
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
        Schema::dropIfExists('contact_socials');
    }
};
