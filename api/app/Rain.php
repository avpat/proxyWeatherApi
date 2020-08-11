<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rain extends Model
{

    protected $fillable = ['precipitation', 'weather_id'];

    /**
     * we don't need timestamp for rain table
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * Cloud belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rain()
    {
        return $this->belongsTo(Weather::class, 'rain_id');
    }
}


