<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Level
 *
 * @mixin \Eloquent
 */
class Level extends Model
{
    public function courses () {
    	return $this->hasOne(Course::class);
    }
}
