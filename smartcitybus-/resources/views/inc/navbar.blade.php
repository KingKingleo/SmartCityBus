<div id="app">
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigatiob</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ action('PagesController@index')}}"> <img src="{{URL::asset('/image/logo4.png')}}" alt="SmartCityBus" height="34px" width="150px"></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse navbar-right">
			<p style="margin-top: -4px">
			<div class="dropdown navbar-right">
  				<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Login
  					<span class="caret"></span></button>
 		 			<ul class="dropdown-menu">
    					<li><a href="{{ action('AdminController@index') }}">Super Admin</a></li>
    					<li><a href="{{ action('HomeController@index') }}">Min Admin</a></li>
    					<li><a href="#">Bus Owner</a></li>
  					</ul>
			</div>
			</p>
		</div>

		<!-- <div id="navbar" class="collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav">
				<li ><a href="{{ action('PagesController@addadmin') }}">Add admin</a></li>
				<li ><a href="{{ action('PagesController@reguser') }}">Register Card</a></li>
				<li ><a href="{{action('PagesController@regbus')}}">Register Bus</a></li>
				<li ><a href="{{action('PagesController@regbusowner')}}">Register Bus Owner</a></li>
			</ul>
		</div> -->
	</div>
	
</nav>
</div>