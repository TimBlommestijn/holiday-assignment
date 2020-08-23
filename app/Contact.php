<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //contact model
    protected $table = 'contacts';
    protected $fillable = [
        'naam',
        'email',
        'bericht',
    ];

    // primary key
    protected $primaryKey = 'contactid';

}
