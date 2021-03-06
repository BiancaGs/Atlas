<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // Relationships
    public function patient() {
        return $this->belongsTo('App\Patient');
    }
    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }
}
