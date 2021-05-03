<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bucketlist extends Model
{
    use HasFactory;

    protected $table = 'bucketlist';
    protected $primaryKey = 'bucketID';
}
