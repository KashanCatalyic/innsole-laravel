<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ces extends Model
{
    use HasFactory;

    protected $fillable = [
        'ces_code',
        'name',
        'email',
        // 'company_name',
        'website',
        'phone',
        'revenue',
        'package_of_choice',
        'description_1',
        'description_2',
        'valid',
    ];

    public static $package_of_choice = [
        1 => 'Starter',
        2 => 'Startup',
        3 => 'Startup Plus',
    ];
}
