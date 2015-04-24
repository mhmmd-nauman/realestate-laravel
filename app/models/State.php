<?php

class State extends Eloquent {    
    protected $table='state';
    
    public function country(){
        return $this->belongs_to('Country');
    }
    public function district(){
        return $this->hasMany('District');
    }
}
