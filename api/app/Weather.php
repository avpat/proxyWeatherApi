<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = ['level', 'description'];

    /**
     * Weather has cloud information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cloud()
    {
        return $this->hasOne(Cloud::class, 'cloud_id');
    }

    /**
     * Weather has Air information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function air()
    {
        return $this->hasOne(Air::class, 'air_id');
    }

    /**
     * Weather has rain information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rain()
    {
        return $this->hasOne(Rain::class, 'rain_id');
    }

    /**
     * Weather has address information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }

    /**
     * Weather has snow information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function snow()
    {
        return $this->hasOne(Snow::class, 'snow_id');
    }

    /**
     * Weather has temperature information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function temperature()
    {
        return $this->hasOne(Temperature::class, 'temperature_id');
    }


}
