<?php

class ApiController extends BaseController
{
    
    public function getIndex()
    {
        $input = Input::get('option');
        
        $country = Country::find($input);
        $state = $country->state();
        return $state->get(['id','state']);
    }
    public function getDistrict()
    {    
        $distinput = Input::get('stateoption');
        $state = State::find($distinput);
        $district = $state->district();
        return $district->get(['id','district']);
    }
}
