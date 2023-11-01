<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_information extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'project_informations';
    protected $fillable = [
        'description',
        'biling',
        'cummulative_billing',
        'billing_value'
    ];
}
