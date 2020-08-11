<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    protected $fillable = ['code', 'name'];


    /**
     * we don't need timestamp for country table
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Country has many cities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function address()
//    {
//        return $this->belongsTo(Address::class);
//    }


}
