<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQuizzesResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_quizzes_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_quizzes_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('answer_id');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.nonhu hauma manang art panjaeanmi
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_quizzes_responses');
    }
}
