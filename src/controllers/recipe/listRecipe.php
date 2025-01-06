<?php

use Hubcook\Models\Recipe;

$page = "Nos recettes";
$recipe = new Recipe();

$listRecip = $recipe->listRecipes();

function showDataList(PDOStatement $list)
{
    foreach ($list as $item) {
        printValue($item);
    }
}

showDataList($listRecip);
// require getView("recipe/listRecipe", $recipe);
