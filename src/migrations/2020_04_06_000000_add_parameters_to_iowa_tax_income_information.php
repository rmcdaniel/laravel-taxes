<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParametersToIowaTaxIncomeInformation extends Migration
{
    protected $iowa_income_tax_information = 'iowa_income_tax_information';

    public function up()
    {
        Schema::table($this->iowa_income_tax_information, function (Blueprint $table) {
            $table->integer('additional_withholding')->default(0);
        });
    }
}
