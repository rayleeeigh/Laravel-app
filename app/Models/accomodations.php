<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class accomodations extends Model
{
    use HasFactory;

    protected $table = 'accomodations';
    protected $primaryKey = 'accID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accname',
        'accDesc',
        'accImage',
        'accPrice',
        'accCity',
        'accContact',
        'accEmail',
        'accSite'
    ];
    
}
