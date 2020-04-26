<!DOCTYPE html>
<html>

	@include('layouts.head')
	

<body>
	
	        <div class="content col-12">
	            <div class="links bg-secondary text-white row justify-content-around" >
	            	
	               <a href="/" class="text-white"><h1>Musica</h1></a>
	               
	            </div>

	        </div>
	        <div class="content">
	        	<div class="op">
	                @yield('content')
	            </div>
	        </div>
	        
	    

		<!-- Optional JavaScript -->
        <!-- Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}"></script>
			<!--@include('layouts.footer')-->
		
</body>
</html>