<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('name');
            $table->string('contact');
            $table->string('address')->nullable();
            $table->tinyInteger('department_id')->nullable();
            $table->tinyInteger('designation_id')->nullable();
            $table->tinyInteger('shift_id');
            $table->tinyInteger('idcard_type_id')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('salary')->nullable();
            $table->date('joining_date')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
