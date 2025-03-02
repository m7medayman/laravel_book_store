<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $fillable = [
        "isbn","title","auhtor","publish_year","stock","price",
    ];
}
