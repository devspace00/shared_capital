<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeAccounts', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('mName');
            $table->string('lName');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->integer('age');
            $table->string('type');
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
        Schema::dropIfExists('employeeAccounts');
    }
}
