@extends('layouts.app')

@section('title','Recipes')

@section('content-left')
	<div class="column left">
		<table border="0" class="ingredients">
			<tr><td class="header">Ingredients</td><td></td></tr>
			<tr><td class="content">1/2 cup mayonnaise</td></tr>
			<tr><td class="content">1 teaspoon Cajun seasoning</td></tr>
			<tr><td class="content">1 1/3 pounds ground beef sirloin</td></tr>
			<tr><td class="content">1 jalapeno pepper, seeded and chopped</td></tr>
			<tr><td class="content">1/2 cup diced white onion</td></tr>
			<tr><td class="content">1 clove garlic, minced</td></tr>
			<tr><td class="content">1 tablespoon Cajun seasoning</td></tr>
			<tr><td class="content">1 teaspoon Worcestershire sauce</td></tr>
			<tr><td class="content">4 slices pepperjack cheese</td></tr>
			<tr><td class="content">4 hamburger buns, split</td></tr>
			<tr><td class="content">4 leaves lettuce</td></tr>
			<tr><td class="content">4 slices tomato</td></tr>
		</table>
	</div>
@endsection

@section('content')
	<div class="column center">
		<img src="images/recipes/texmex-burger.jpg" class="contentImage" />
		<h1 class="center">Tex-Mex Burger with Cajun Mayo</h1>
		<p>
			Preheat grill for medium-high heat. In a small bowl, mix together the mayonnaise and 1 teaspoon of Cajun seasoning. Set aside.
		</p>
		<p>
			In a large bowl, mix together the ground sirloin, jalapeno pepper, onion, garlic, 1 tablespoon Cajun seasoning, and Worcestershire sauce using your hands. Divide into 4 balls, and flatten into patties.
		</p>
		<p>
			Lightly oil the grilling surface, and place the patties on the grill. Cook for about 5 minutes per side, or until well done. During the last 2 minutes, lay a slice of cheese on top of each patty. Spread the seasoned mayonnaise onto the insides of the buns. Put burgers in the buns, and top with lettuce and tomato to serve.
		</p>
	</div>
@endsection

@section('content-right')
	<div class="column right">
		<table border="0" class="ingredients">
			<tr><td class="header">Suggested recipes</td><td></td></tr>
			<tr><td class="content">Slider-style Mini Burgers</td></tr>
			<tr><td class="content">Big Smokey Burgers</td></tr>
			<tr><td class="content">Garlic and Onion Burgers</td></tr>
			<tr><td class="content">Game Day Hamburgers</td></tr>
			<tr><td class="content">Bacon Wrapped Hamburgers</td></tr>
		</table>
	</div>
@endsection