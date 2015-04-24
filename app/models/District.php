<?php

class District extends Eloquent {    
    protected $table='district';
    
    public function state(){
        return $this->belongs_to('state');
    }
}
