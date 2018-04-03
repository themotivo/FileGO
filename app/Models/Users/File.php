<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'user_id'
    ];

    /**
     * File belongs to a User.
     *
     * @var return
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }
}
