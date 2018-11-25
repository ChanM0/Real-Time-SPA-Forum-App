<?php

namespace App\Models;

use App\User;
use App\Models\Question;
use App\Models\Like;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // protected $fillable = ['body',];

    /** Do this to ignore the mass assignments */
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
