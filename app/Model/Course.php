<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;


}
