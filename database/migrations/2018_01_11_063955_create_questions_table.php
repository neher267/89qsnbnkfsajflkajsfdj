<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('category', 1);
            $table->string('subject', 30);
            $table->text('question');
            $table->string('a');//options: a,b,c,d
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('ans', 1);
            $table->double('weight', 2,0);
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
        Schema::dropIfExists('questions');
    }
}
