<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'foodID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'foodname',
        'foodDesc',
        'foodImage',
        'foodPrice',
        'foodCity',
        'foodContact',
        'foodEmail',
        'foodSite'
    ];
}
