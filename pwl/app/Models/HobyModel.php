<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobyModel extends Model
{
    use HasFactory;
    
    protected $table = 'hobies';

    protected $fillable = [
        'name',
        'description'
    ];
}
