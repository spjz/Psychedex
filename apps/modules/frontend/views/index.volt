<!doctype html>
<html class="no-js" lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Concrete pumping services in the South of England" />
	<meta name="keywords" content="concrete, pumping, southampton, hampshire, dorset, west sussex, east sussex, surrey, wiltshire, berkshire, oxfordshire, isle of wight" />
	<meta name="author" content="Joe Doherty <io@spjz.uk>" />

	{{ get_title() }}
	{{ stylesheet_link('css/app.css') }}
	{{ stylesheet_link('bower_components/font-awesome/css/font-awesome.min.css') }}

</head>

<body>

	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
				<li class="menu-text">Psychédex</li>
				<li><a href="#">Substances</a></li>
				<li><a href="#">Sources</a></li>
				<li><a href="#">Effects</a></li>
				<li><a href="#">Reports</a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
				<li><input type="search" placeholder="Search"></li>
				<li><button type="button" class="button"><i class="fa fa-search"></i></button></li>
				<li><button type="button" class="button secondary"><i class="fa fa-user"></i></li>
			</ul>
		</div>
	</div>

	{{ content() }}

	<footer>
		<div class="row expanded">
			<div class="medium-6 columns">
				<ul class="menu">
					<li><a href="#">What is this</a></li>
					<li><a href="#">I dont</a></li>
					<li><a href="#">even know</a></li>
				</ul>
			</div>
			<div class="medium-6 columns">
				<ul class="menu align-right">
					<li class="menu-text"><sub><a href="mailto:io@spjz.uk">sPJz</a></sub>( ͡° ͜ʖ ͡°)<sub>{{ date('Y') }}</sub></li>
				</ul>
			</div>
		</div>
	</footer>

	{{ javascript_include('bower_components/jquery/dist/jquery.js') }}
	{{ javascript_include('bower_components/what-input/what-input.js') }}
	{{ javascript_include('bower_components/foundation-sites/dist/foundation.js') }}
	{{ javascript_include('js/app.js') }}
</body>
</html>
