<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('sitename');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('time')->nullable();
            $table->longText('footer_text')->nullable();
            $table->string('footer_logo')->nullable();
            $table->longText('terms')->nullable();
            $table->longText('privacy')->nullable();

            $table->string('simage1')->nullable();
            $table->string('simage2')->nullable();
            $table->string('simage3')->nullable();

            $table->string('stext1')->nullable();
            $table->string('stext2')->nullable();
            $table->string('stext3')->nullable();

            $table->string('banner')->nullable();


            $table->string('video')->nullable();
            $table->longText('about')->nullable();
            $table->longText('aboutimage')->nullable();

            $table->longText('review1')->nullable();
            $table->longText('review2')->nullable();
            $table->longText('review3')->nullable();

            $table->longText('rg1')->nullable();
            $table->longText('rg2')->nullable();
            $table->longText('rg3')->nullable();

            $table->longText('q1')->nullable();
            $table->longText('q2')->nullable();
            $table->longText('q3')->nullable();
            $table->longText('q4')->nullable();

            $table->longText('a1')->nullable();
            $table->longText('a2')->nullable();
            $table->longText('a3')->nullable();
            $table->longText('a4')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
