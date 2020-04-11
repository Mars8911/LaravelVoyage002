<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Acquisition extends Model
{
    protected $fillable = [
        'big_image', 'title', 'descrip', 'content', 'narrative_image1', 'narrative_image2', 'substandard_image', 'substandard_descriptitle1', 'substandard_descript1', 'substandard_descriptitle2', 'substandard_descript2', 'substandard_descriptitle3',
        'substandard_descript3', 'substandard_descriptitle4', 'substandard_descript4',
    ];
}
