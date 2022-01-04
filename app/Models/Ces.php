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
        'company_name',
        'website',
        'description_1',
        'description_2',
        'valid',
    ];
}
