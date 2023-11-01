<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing_plans extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'billing_plans';
    protected $fillable = [
        'progress_by_system',
        'subs_date_1',
        'approval_date_1',
        'progress_hardcopy',
        'subs_date_2',
        'approval_date_2',
        'upload_to_system_2',
        'proforma_invoice',
        'subs_date_3',
        'approval_date_3',
        'readiness_of_supporting',
        'subs_date_4',
        'approval_date_4',
        'sap_invoice_creation_5',
        'sap_invoice_submitted_5',
        'upload_invoice_in_company_5',
        'approved_invoice_in_company_5',
        'payment_approval_in_company_5',
        'sap_invoice_creation_6'
    ];
}
