<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body class="body_bg">
<div class="page-wrapper">

@include('includes.header')
    
    <div class="main">
    <div class="map-wrapper">
    <div id="map" class="map" data-transparent-marker-image="http://html.realsite.byaviators.com/assets/img/transparent-marker-image.png">
    </div><!-- /.map -->

    <div class="map-filter-horizontal">
        <div class="container">
            {{ Form::open(array('url' => 'searchproperty')) }}
                <div class="row">
                    

                    <div class="form-group col-sm-3">
                        @if(isset($country_options))
                       {{ Form::select('country', $country_options ,'select',array('id' => 'country')) }}
                         @endif
                    </div><!-- /.form-group -->

                    <div class="form-group col-sm-3">
                        <select id="state" name="state">
                            <option>State</option>
                            
                        </select>
                    </div><!-- /.form-group -->

                    <div class="form-group col-sm-3">
                        <select name="district" id="district">
                            <option>Location</option>
                            
                        </select>
                        
                    </div><!-- /.form-group -->
                    <div class="form-group col-sm-3" style="text-align: center;">
                        <button type="submit" class="btn btn-simple ">Search
                        </button>
                    </div><!-- /.form-group -->
                </div><!-- /.row -->
            {{ Form::close() }}
        </div><!-- /.container -->
    </div><!-- /.map-filter-horizontal -->
</div>
        <!-- /.map-wrapper -->
        
        
        
    </div><!-- /.main -->
	
	@yield('content')

	
	
	@include('includes.footer')
	

</div>
</body>
</html>