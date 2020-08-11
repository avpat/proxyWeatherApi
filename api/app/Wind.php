<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wind extends Model
{

    protected $fillable = ['weather_id', 'wind_speed', 'wind_direction'];

    /**
     * we don't need timestamp for wind table
     *
     * @var bool
     */
    public $timestamps = false;

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
