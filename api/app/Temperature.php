<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $fillable = ['min_temp', 'max_temp'];

    /**
     * we don't need timestamp for temp table
     *
     * @var bool
     */
    public $timestamps = false;

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
