<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $guarded = [];

    public function question(){
        # code...
        return $this->belongsTo(Question::class);
    }
}
