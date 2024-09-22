<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array',
        'date' => 'date',
    ];

    protected $guarded = [];

    // protected $dates = ['date'];

    /**
 * Get the user that owns the event.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    public function user(){
       return $this->belongsTo('App\Models\User'); 
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
