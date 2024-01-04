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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete()->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->string('title');
            $table->enum('interval',[' morning ','  evenning ']);
            $table->enum('status', ['في الانتظار', 'تمت الموافقة', 'تم الغاء الحجز', 'تأخير الحجز'])->default('في الانتظار');
            $table->timestamp('date_from');
            $table->timestamp('date_to')->nullable();
            $table->string('type_of_event');
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
