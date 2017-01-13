<?php
/**
 * Created by PhpStorm.
 * User: Ermin
 * Date: 13.01.2017
 * Time: 16:48
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';

    protected $fillable = [
        'titel', 'category', 'price', 'state', 'zip', 'address', 'number', 'email', 'name', 'description', 'image',
    ];
}