<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    protected $fillable = ['country_id', 'city_code', 'name', 'is_capital'];

//    protected $with = ['country'];
    /**
     * we don't need timestamp for city table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * City belongs to Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {

        return $this->belongsTo(Country::class, 'city_id');
    }
}
