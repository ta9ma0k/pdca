<?php

namespace App\infrastructure\eloquent;

use Illuminate\Database\Eloquent\Model;
use Rorecek\Ulid\HasUlid;

class Report extends Model
{
    use HasUlid;
}