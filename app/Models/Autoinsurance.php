<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoinsurance extends Model
{
    use HasFactory;

    protected $table = 'autoinsurance';
    protected $primaryKey  = 'auto_id';

    protected $fillable = [

        'autozipcode',
        'autoexistpolicy',
        'autocarname',
        'autocarmodel',
        'autocaryear',
        'autogender',
        'autobirthday',
        'autoaddress',
        'autofirstname',
        'autolastname',
        'autoemail',
        'autophone',
        'autostatus',

    ];

}
