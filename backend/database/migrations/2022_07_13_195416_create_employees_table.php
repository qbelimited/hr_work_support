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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained();
            
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->date('birthdate')->nullable();
            $table->string('gender');
            $table->string('address')->nullable();
            $table->integer('department');
            $table->integer('country');
            $table->integer('city');
            $table->string('employee_id')->nullable();
            $table->string('bank_acc_no');
            $table->string('jobtitle')->nullable();
            // $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('work_phone');
            $table->string('work_email');
            $table->string('private_email');
            $table->date('recruitment_date')->nullable();
            $table->integer('supervisor')->nullable();
            $table->integer('indirect_supervisor')->nullable();
            $table->date('date_resigned')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('employees');
    }
};
