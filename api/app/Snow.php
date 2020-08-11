<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snow extends Model
{
    protected $fillable = ['min_snow', 'max_snow'];


    /**
     * Snow belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function snow()
    {
        return $this->belongsTo(Weather::class, 'snow_id');
    }
}
