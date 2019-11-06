<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seq')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('doc_id')->unsigned()->index();
            $table->string('sub_title');
            $table->tinyInteger('sub_level')->unsigned();
            $table->text('content')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('doc_id')->references('id')->on('docs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('subjects', function (Blueprint $table) {
        //     $table->dropForeign(['user_id', 'doc_id']);
        // });

        Schema::dropIfExists('subjects');
    }
}
