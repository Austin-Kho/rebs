<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRebsCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebs_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('registration_number');
            $table->string('ceo');
            $table->string('business_number');
            $table->string('business_type')->nullable();
            $table->string('sectors')->nullable();
            $table->string('main_tel')->nullable();
            $table->string('main_fax')->nullable();
            $table->date('establishment_date')->nullable();
            $table->date('opening_date')->nullable();
            $table->string('tax_invoice_email')->nullable();
            $table->string('tax_office')->nullable();
            $table->string('postcode');
            $table->string('address');
            $table->string('detail_address');
            $table->string('extra_address');
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
        Schema::dropIfExists('rebs_companies');
    }
}