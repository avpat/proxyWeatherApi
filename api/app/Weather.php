<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
   // protected $guarded = [];

    protected $fillable = ['source', 'forecast_period', 'appid'];

    /**
     * Weather has cloud information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cloud()
    {
        return $this->hasOne(Cloud::class)->select(['cover']);
    }

    /**
     * Weather has Air information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function air()
    {
        return $this->hasOne(Air::class)->select(['humidity']);
    }

    /**
     * Weather has rain information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rain()
    {
        return $this->hasOne(Rain::class)->select(['precipitation']);
    }


    /**
     * Weather has snow information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function snow()
    {
        return $this->hasOne(Snow::class)->select(['min_snow', 'max_snow']);
    }

    /**
     * Weather has temperature information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function temperature()
    {
        return $this->hasOne(Temperature::class)->select(['min_temp', 'max_temp']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->hasOne(Country::class)->select(['code', 'name']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class)->select(['city_code', 'name']);
    }

    public function cordinate()
    {
        return $this->hasOne(Cordinate::class)->select(['latitude', 'longitude']);
    }



}
