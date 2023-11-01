<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'setup_projects';
    protected $fillable = [
        'service_type',
        'project_name',
        'pic',
        'project_start_date',
        'project_end_date',
        'total_project_type',
        'currency'
    ];
}
