<nav class="navbar navbar-default navbar-fixed-top">
<article dir="customcss">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">wastePickers</a>
		</div>
		<ul class="nav navbar-nav navbar-right" >
			<li><a href="{{ route('pages.index') }}">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">CallPicker</a></li>
			<li><a href="{{ route('pages.create') }}">WastePicker</a></li>
		</ul>
		<ul class="nav navbar-nav">
		@if(Auth::check())
		<li>{{ Auth::user()->name() }}</li>
			<li><a href="{{ route('logout')}}">login</a>log-out</li>
			@else
			<li><a href="{{ route('login')}}">login</a></li>
			<li><a href="{{ route('register') }}">register</a></li>
			@endif
		</ul>
	</div>
	</article>
</nav>