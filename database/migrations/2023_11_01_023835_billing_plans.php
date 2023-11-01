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
        Schema::create('billing_plans', function (Blueprint $table) {
            $table->id();
            
            $table->string('progress_by_system');
            $table->date('subs_date_1');
            $table->date('approval _date_1');

            $table->string('progress_hardcopy');
            $table->date('subs_date_2');
            $table->date('approval _date_2');
            $table->date('upload_to_system_2');
            
            $table->string('proforma_invoice');
            $table->date('subs_date_3');
            $table->date('approval _date_3');
            
            $table->string('readiness_of_supporting');
            $table->date('subs_date_4');
            $table->date('approval _date_4');

            $table->date('sap_invoice_creation_5');
            $table->date('sap_invoice_submitted_5');
            $table->date('upload_invoice_in_company_5');
            $table->date('approved_invoice_in_company_5');
            $table->date('payment_approval_in_company_5');
            
            $table->date('sap_invoice_creation_6');
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
