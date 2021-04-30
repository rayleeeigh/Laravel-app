<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adventures extends Model
{
    use HasFactory;

    protected $table = 'adventures';
    protected $primaryKey = 'advID';

}
