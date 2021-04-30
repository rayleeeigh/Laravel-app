<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accomodations extends Model
{
    use HasFactory;

    protected $table = 'accomodations';
    protected $primaryKey = 'accID';
    
}
