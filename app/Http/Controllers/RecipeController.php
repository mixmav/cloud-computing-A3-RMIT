<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	public function GetHomePageRecipes(){
		$recipes = Recipe::where('user_id', '=', 0)->get();
		return $recipes;
	}

	public function SeedTenRecipes(){
		$recipes = [
			"https://www.goodfood.com.au/recipes/cream-of-mushroom-soup-20130827-2snua",
			"https://www.goodfood.com.au/recipes/recipetin-eats-x-good-food-lemon-myrtle-cheesecake-with-finger-lime-20210701-h1wv9n",
			"https://www.goodfood.com.au/recipes/recipetin-eats-x-good-food-bush-tomato-sauce-20210701-h1wvab",
			"https://www.goodfood.com.au/recipes/recipetin-eats-x-good-food-slowcooked-kangaroo-pie-20210701-h1wv95",
			"https://www.goodfood.com.au/recipes/recipetin-eats-x-good-food-bush-tucker-damper-20210701-h1wv9v",
			"https://www.goodfood.com.au/recipes/chicken-schnitzel-20111113-29u8f"
		];

		foreach($recipes as $recipe_link){
			$recipe_content = file_get_contents($recipe_link);
			preg_match("@<title.*?>(.*?)</title@i", $recipe_content, $matches);
			$recipe_name = $matches[1];

			$recipe = new Recipe;
			$recipe->name = $recipe_name;
			$recipe->link = $recipe_link;
			$recipe->user_id = 0;
			$recipe->save();
		}

		return true;
	}

	public function likeRecipe(){
		return 'hi';
	}

	public function NewRecipe(Request $request){
		$recipe_link = $request->link;

		$recipe_content = file_get_contents($recipe_link);
		preg_match("@<title.*?>(.*?)</title@i", $recipe_content, $matches);
		$recipe_name = $matches[1];

		$recipe = new Recipe;
		$recipe->name = $recipe_name;
		$recipe->link = $recipe_link;
		$recipe->user_id = auth()->id();
		$recipe->save();

		return true;
	}

	public function getUserRecipes(){
		$recipes = Recipe::where('user_id', '=', auth()->id())->get();
		return $recipes;
	}
}