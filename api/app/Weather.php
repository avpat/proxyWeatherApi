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
        return $this->hasOne(Cloud::class);
    }

    /**
     * Weather has Air information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function air()
    {
        return $this->hasOne(Air::class);
    }

    /**
     * Weather has rain information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rain()
    {
        return $this->hasOne(Rain::class);
    }


    /**
     * Weather has snow information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function snow()
    {
        return $this->hasOne(Snow::class);
    }

    /**
     * Weather has temperature information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function temperature()
    {
        return $this->hasOne(Temperature::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->hasOne(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class);
    }



}
