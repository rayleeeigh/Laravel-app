<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historics extends Model
{
    use HasFactory;

    protected $table = 'historics';
    protected $primaryKey = 'hisID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hisname',
        'hisDesc',
        'hisImage',
        'hisPrice',
        'hisCity',
        'hisContact',
        'hisEmail',
        'hisSite'
    ];
}
