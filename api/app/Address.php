<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    protected $fillable = ['city_id', 'country_id', 'cordinate_id'];

    /**
     * we don't need timestamp for address table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Address belongs to Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this->belongsTo(Weather::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->hasOne(Country::class);
    }

}
