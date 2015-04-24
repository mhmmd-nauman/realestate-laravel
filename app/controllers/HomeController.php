<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
        public function search(){
            
            $country_id = Input::get('country');
            $state_id = Input::get('state');
            $district_id = Input::get('district');
            
            $country = Country::find($country_id);
            $address = $country->countries_name;
            if($state_id>0){
                $state = State::find($state_id);
                $address = $state->state.','.$address;
                if($district_id>0){
                    $district =District::find($district_id);
                    $address = $district->district.','.$address;
                }
            }
            try {
                
                $geocode = Geocoder::geocode($address);
                // The GoogleMapsProvider will return a result
                $data = $geocode->toArray();
                
                $latitude = $data['latitude'];
                $longitude = $data['longitude'];
                $country_options = Country::lists('countries_name','id');
                
                return View::make('dashboard')
                    ->with('country_options', $country_options)
                    ->with('latitude', $latitude)
                    ->with('longitude', $longitude)
                    ->with('address', $address)
                ; 
                //var_dump($geocode);
            } catch (\Exception $e) {
                // No exception will be thrown here
                //echo $e->getMessage();
            }
            
        }
	public function index()
	{
            
            try {
                 $address = "Saudi Arabia";
                $geocode = Geocoder::geocode($address);
                // The GoogleMapsProvider will return a result
                 $data = $geocode->toArray();
                 
                $latitude = $data['latitude'];
                $longitude = $data['longitude'];
                
               
            } catch (\Exception $e) {
                // No exception will be thrown here
                //echo $e->getMessage();
            }
            
            
            $country_options = Country::lists('countries_name','id');
            
            return View::make('dashboard')
                    ->with('country_options', $country_options)
                    ->with('latitude', $latitude)
                    ->with('longitude', $longitude)
                    ->with('address', $address)
                ;   
	}

}
