<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    protected $fillable = ['humidity'];

    /**
     * we don't need timestamp for section table
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
