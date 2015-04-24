<?php

class Country extends Eloquent {
    protected $table='country';
    public function state(){
        return $this->hasMany('State');
    }
}
