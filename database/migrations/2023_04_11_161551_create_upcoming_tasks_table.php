<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('upcoming_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->date('date_start');
            $table->date('due_date');
            $table->string('task_status');
            $table->foreignId('id_user');
            //$table->timestamp('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcoming_tasks');
    }
};
