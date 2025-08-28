<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runer extends Model
{
    use HasFactory;
    protected $table = 'runer';

    protected $fillable = [
        'name',
        'bib',
    ];
}