<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historics extends Model
{
    use HasFactory;

    protected $table = 'historics';
    protected $primaryKey = 'hisID';
}
