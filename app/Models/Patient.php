<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'uuid',
        'record_number',
        'name',
        'phone_number'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
