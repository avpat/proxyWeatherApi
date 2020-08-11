<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloud extends Model
{
    protected $fillable = ['level', 'description'];

    /**
     * we don't need timestamp for section table
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
