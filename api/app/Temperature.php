<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $fillable = ['min_temp', 'max_temp'];


    /**
     * Temperature belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function temperature()
    {
        return $this->belongsTo(Weather::class, 'temperature_id');
    }
}
