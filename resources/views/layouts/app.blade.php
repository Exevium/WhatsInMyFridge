<html>

<head>
	<title>@yield('title') - What's In My Fridge</title>
	<link href="{{ elixir('css/stylesheet.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ elixir('images/icon.png') }}" rel="icon" />
</head>

<body>
	<div class="page">
		<div class="headerContainer">
			<div class="headerLogo"><a href="/" class="menuButton"><img src="images/logoWhite.png" height="50" /></a></div>
			<div class="headerFiller"></div>
			<div>

			</div>
			<a href="{{ '/login' }}" class="headerButton headerLogin"><div>Login</div></a>
			<a href="{{ '/register' }}" class="headerButton headerLogin">Register</a>
			<div class="headerButton headerOptions"></div>
		</div>
		<div><img src="images/headerImage.jpg" class="headerImage" /></div>
		<br />
		<div class="menuContainer">
			<a href="/" class="menuButton">Home</a>
			<a href="{{ '/ingredients' }}" class="menuButton">Ingredients</a>
			<a href="{{ '/recipes' }}" class="menuButton">Recipes</a>
			<a href="{{ '/button' }}" class="menuButton">Button</a>
		</div>
		<div class="content">
			@section('content-left')
			@show

			@section('content')
			@show

			@section('content-right')
			@show
		</div>
	</div>
</body>

</html>