<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRebsDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebs_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rebs_company_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            $table->foreign('rebs_company_id')->references('id')->on('rebs_companies')
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
        Schema::table('rebs_departments', function (Blueprint $table) {
            $table->dropForeign(['rebs_company_id']);
        });

        Schema::dropIfExists('rebs_departments');
    }
}
