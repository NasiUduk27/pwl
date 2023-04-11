<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyModel extends Model
{
    use HasFactory;
    
    protected $table = 'families';

    protected $fillable = [
        'name',
        'telepon',
        'hubungan',
    ];
}
