<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wind extends Model
{
    protected $fillable = ['wind_speed', 'wind_direction'];


    /**
     * Wind belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wind()
    {
        return $this->belongsTo(Weather::class, 'wind_id');
    }
}
