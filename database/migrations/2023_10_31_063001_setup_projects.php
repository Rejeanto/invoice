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
        Schema::create('setup_projects', function (Blueprint $table) {
            $table->id();
            $table->string('service_type');
            $table->string('project_name');
            $table->string('pic');
            $table->date('project_start_date');
            $table->date('project_end_date');
            $table->string('total_project_type');
            $table->string('currency');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
