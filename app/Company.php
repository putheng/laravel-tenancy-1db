<?php

namespace App;

use App\Project;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function projects()
    {
    	return $this->hasMany(Project::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
