<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @mixin \Eloquent
 */
class Student extends Model
{
    public function courses () {
    	return $this->belongsToMany(Course::class);
    }

    public function user () {
		return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
	}
}
