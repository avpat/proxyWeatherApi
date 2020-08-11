<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    protected $guarded = [];

    protected $fillable = ['humidity','weather_id'];

    /**
     * we don't need timestamp for air table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Humidity belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function air()
    {
        return $this->belongsTo(Weather::class, 'air_id');
    }
}
