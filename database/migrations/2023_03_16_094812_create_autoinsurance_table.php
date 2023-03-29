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
        Schema::create('autoinsurance', function (Blueprint $table) {
            $table->id('auto_id');
            $table->string('autozipcode',250);
            $table->string('autoexistpolicy',250);
            $table->string('autocarname',250);
            $table->string('autocarmodel',250);
            $table->string('autocaryear',250);
            $table->enum('autogender', ['Male', 'Female']);
            $table->string('autobirthday',250);
            $table->string('autoaddress',250);
            $table->string('autofirstname',250);
            $table->string('autolastname',250);
            $table->string('autoemail',250);
            $table->string('autophone',250);
            $table->enum('autostatus', ['Active', 'Deactive']);
            $table->rememberToken();
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
        Schema::dropIfExists('autoinsurance');
    }
};
