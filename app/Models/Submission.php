<?php

namespace App\Models;

class Submission extends BaseModel
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
