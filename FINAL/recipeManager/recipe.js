let recipeOne = {
	recipe_name: 'Crockpot Chili',
	recipe_serving: 6,
	recipe_time: 25,
	ingredients: [
		{
			ingred_num: 2,
			ingred_unit: 'tbsp',
			ingred: 'cooking oil'
		},
		{
			ingred_num: 1,
			ingred_unit: 'cup',
			ingred: 'onion'
		},
		{
			ingred_num: 1,
			ingred_unit: 'cup',
			ingred: 'chopped peppers'
		},
		{
			ingred_num: 4,
			ingred_unit: 'tbsp',
			ingred: 'chili powder'
		},
		{
			ingred_num: 1,
			ingred_unit: 'lb',
			ingred: 'ground beef/chicken'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cans',
			ingred: 'red beans'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cans',
			ingred: 'kidney beans'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cans',
			ingred: 'tomato puree'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cans',
			ingred: 'tomato sauce'
		},
		{
			ingred_num: 1,
			ingred_unit: 'cup',
			ingred: 'shredded cheese(optional)'
		},
		{
			ingred_num: 0.5,
			ingred_unit: 'cup',
			ingred: 'sour cream(optional)'
		}
	],
	instructions: []
};

let recipeTwo = {
	recipe_name: 'Breakfast Casserole',
	recipe_serving: 8,
	recipe_time: 70,
	ingredients: [
		{
			ingred_num: 2,
			ingred_unit: 'package',
			ingred: 'simply potatoes hash browns'
		},
		{
			ingred_num: 8,
			ingred_unit: 'fresh',
			ingred: 'eggs'
		},
		{
			ingred_num: 3,
			ingred_unit: 'cup',
			ingred: 'shredded cheese'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cup',
			ingred: 'milk'
		},
		{
			ingred_num: 1,
			ingred_unit: 'chopped',
			ingred: 'onion'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cup',
			ingred: 'ham/bacon'
		}
	],
	instructions: [
		'Mix potatoes with 1 cup of cheese, place in pan, beat eggs and milk, add onion, add rest of cheese, pour into pan on potatoes, bake at 350 for 1 hour'
	]
};

let recipeThree = {
	recipe_name: 'Potato Soup',
	recipe_serving: 8,
	recipe_time: 35,
	ingredients: [
		{
			ingred_num: 4,
			ingred_unit: 'slices',
			ingred: 'bacon'
		},
		{
			ingred_num: 2,
			ingred_unit: 'lb',
			ingred: 'potato'
		},
		{
			ingred_num: 3,
			ingred_unit: 'cup',
			ingred: 'chicken stock'
		},
		{
			ingred_num: 3,
			ingred_unit: 'cloves',
			ingred: 'garlic'
		},
		{
			ingred_num: 1,
			ingred_unit: 'cup',
			ingred: 'shredded cheese'
		},
		{
			ingred_num: 1,
			ingred_unit: 'cup',
			ingred: 'sour cream'
		}
	],
	instructions: [
		'cook bacon, mix potatoes, stir in chicken stock, add onion, cook on low heat, mash potatoes, stir in cheese and sour cream, cover and cook on low'
	]
};

let recipeFour = {
	recipe_name: 'Crockpot Ribs',
	recipe_serving: 8,
	recipe_time: 120,
	ingredients: [
		{
			ingred_num: 2,
			ingred_unit: 'racks',
			ingred: 'ribs'
		},
		{
			ingred_num: 2,
			ingred_unit: 'cup',
			ingred: 'BBQ sauce'
		},
		{
			ingred_num: 1,
			ingred_unit: 'tbsp',
			ingred: 'paprika'
		},
		{
			ingred_num: 4,
			ingred_unit: 'tbsp',
			ingred: 'chili powder'
		},
		{
			ingred_num: 1,
			ingred_unit: 'tsp',
			ingred: 'salt'
		},
		{
			ingred_num: 1,
			ingred_unit: 'tsp',
			ingred: 'black pepper'
		},
		{
			ingred_num: 1,
			ingred_unit: 'tsp',
			ingred: 'garlic powder'
		},
		{
			ingred_num: 1,
			ingred_unit: 'tsp',
			ingred: 'mustard'
		}
	],
	instructions: [
		'remove rib membrane, mix dry run ingredients, place ribs in crockpot, add BBQ sauce, cook on low, broil'
	]
};
// function pageLoad() {
// 	let template = document.querySelector('#recipeOneDisplay');
// 	console.log(template);
// 	let h1Object = template.querySelector('h1');
// 	let h3Object = template.querySelector('h3');
// 	let h4Object = template.querySelector('h4');
// 	let liObject = template.querySelector('li');
// 	// let liIngredUnitObject = template.querySelector('td');

// 	let h1Attr = document.adoptNode(h1Object, true);
// 	console.log(h1Attr);
// 	h1Attr.innerHTML = recipeOne.recipe_name;
// 	document.querySelector('#recipeOneContainer').appendChild(h1Attr);

// 	let h3Attr = document.adoptNode(h3Object, true);
// 	console.log(h3Attr);
// 	h3Attr.innerHTML = 'Serving Size: ' + recipeOne.recipe_serving;
// 	document.querySelector('#recipeOneContainer').appendChild(h3Attr);

// 	let h4Attr = document.adoptNode(h4Object, true);
// 	console.log(h4Attr);
// 	h4Attr.innerHTML = 'Preperation Time: ' + recipeOne.recipe_time;
// 	document.querySelector('#recipeOneContainer').appendChild(h4Attr);

// 	for (let i = 0; i < recipeOne.ingredients.length; i++) {
// 		let liAttr = document.importNode(liObject, true);
// 		console.log(liAttr);
// 		liAttr.innerHTML = recipeOne.ingredients[i];
// 		document.querySelector('#recipeOneContainer').appendChild(liAttr);
// 	} //TEMPLATE ONE END

// 	let template2 = document.querySelector('#recipeTwoDisplay');
// 	console.log(template2);
// 	let h1Object2 = template2.querySelector('h1');
// 	let h3Object2 = template2.querySelector('h3');
// 	let h4Object2 = template2.querySelector('h4');
// 	let liObject2 = template2.querySelector('li');
// 	// let liIngredUnitObject = template.querySelector('td');

// 	let h1Attr2 = document.adoptNode(h1Object2, true);
// 	console.log(h1Attr2);
// 	h1Attr2.innerHTML = recipeTwo.recipe_name;
// 	document.querySelector('#recipeTwoContainer').appendChild(h1Attr);

// 	let h3Attr2 = document.adoptNode(h3Object2, true);
// 	console.log(h3Attr);
// 	h3Attr2.innerHTML = 'Serving Size: ' + recipeTwo.recipe_serving;
// 	document.querySelector('#recipeTwoContainer').appendChild(h3Attr2);

// 	let h4Attr2 = document.adoptNode(h4Object2, true);
// 	console.log(h4Attr);
// 	h4Attr2.innerHTML = 'Preperation Time: ' + recipeTwo.recipe_time;
// 	document.querySelector('#recipeOneContainer').appendChild(h4Attr2);

// 	for (let i = 0; i < recipeTwo.ingredients.length; i++) {
// 		let liAttr2 = document.importNode(liObject2, true);
// 		console.log(liAttr2);
// 		liAttr2.innerHTML = recipeTwo.ingredients[i];
// 		document.querySelector('#recipeTwoContainer').appendChild(liAttr2);
// 	}

// 	document.querySelector('#recipeOneContainer').style.display = 'none';

// 	document.querySelector('#recipeTwoContainer').style.display = 'none';
// }

function showRecipeOne() {
	document.querySelector('#recipeOneContainer').style.display = 'inline-block';
	document.querySelector('#recipeTwoContainer').style.display = 'none';
	document.querySelector('#recipeThreeContainer').style.display = 'none';
	document.querySelector('#recipeFourContainer').style.display = 'none';
}

function showRecipeTwo() {
	document.querySelector('#recipeTwoContainer').style.display = 'inline-block';
	document.querySelector('#recipeOneContainer').style.display = 'none';
	document.querySelector('#recipeThreeContainer').style.display = 'none';
	document.querySelector('#recipeFourContainer').style.display = 'none';
}

function showRecipeThree() {
	document.querySelector('#recipeThreeContainer').style.display = 'inline-block';
	document.querySelector('#recipeTwoContainer').style.display = 'none';
	document.querySelector('#recipeOneContainer').style.display = 'none';
	document.querySelector('#recipeFourContainer').style.display = 'none';
}

function showRecipeFour() {
	document.querySelector('#recipeFourContainer').style.display = 'inline-block';
	document.querySelector('#recipeTwoContainer').style.display = 'none';
	document.querySelector('#recipeOneContainer').style.display = 'none';
	document.querySelector('#recipeThreeContainer').style.display = 'none';
}
