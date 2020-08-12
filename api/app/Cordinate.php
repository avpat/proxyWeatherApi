<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cordinate extends Model
{

    protected $fillable = ['latitude', 'longitude'];

    /**
     * we don't need timestamp for cordinate table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Cordinate belongs to Address
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cordinate()
    {
        return $this->belongsTo(Weather::class);
    }
}
