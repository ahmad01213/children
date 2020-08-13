<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'name', 'phone','address','registry','nationality','birth','f_name','f_phone',
        'f_work','f_qualifications','m_name','m_phone','m_work','diseases'
    ];
    public $table = "childs";
}
 
