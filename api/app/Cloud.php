<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloud extends Model
{

    protected $fillable = ['cover', 'weather_id'];

    /**
     * we don't need timestamp for cloud table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Cloud belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cloud()
    {
        return $this->belongsTo(Weather::class, 'cloud_id');
    }

}
