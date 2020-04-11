<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Content extends Model
{
    protected $fillable = [
        'banner_title',
        'banner_description',
        'vice_image',
        'office_map',
        'office_tel',
        'office_fax',
        'office_email',
        'office_week',
        'office_time',
    ];
}
