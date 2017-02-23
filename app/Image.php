<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';


    protected $fillable = [
        'name',
        'width',
        'height',
        'size',
        'location',
        'hidden'
    ];

    public $rules = [
        'ext' => 'in:jpeg,jpg,png',
        'width' => 'required|min:1|max:5445555',
        'height' => 'required|min:1|max:13665',
        'size' => 'required|min:1|max:5000000',
    ];

}
