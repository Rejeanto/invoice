<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_billing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'table_billings';
    protected $fillable = [
        'billing_scheme'
    ];
}
