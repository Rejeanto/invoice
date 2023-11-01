<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_contracts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'table_contracts';
    protected $fillable = [
        'contract_type'
    ];
}
