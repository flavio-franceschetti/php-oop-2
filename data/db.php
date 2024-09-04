<?php

require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Accessory.php';
require_once __DIR__ . '/../Model/Toy.php';
require_once __DIR__ . '/../Model/Product.php';

$db = [
    new Food(
        "Premium Dog Food",     // Name
        29.99,                  // Price
        "dog_food.jpg",         // Image
        "Food",                 // Type
        "Dog",                  // Animal type
        "High-quality dry food for adult dogs.", // Description
        "Beef",                 // Flavor
        "Adult",                // Age group
    ),
    new Toy(
        "Feather Wand",         // Name
        14.99,                  // Price
        "cat_toy.jpg",          // Image
        "Toy",                   // type
        "Cat",                  // Animal type
        "Interactive toy to keep your cat entertained.", // description
        "Feather",              // Material
        "Small",                // Size
    ),
    new Accessory(
        "Leather Collar",       // Name
        19.99,                  // Price
        "leather_collar.jpg",   // Image
        "Accessory",            // Type         
        "Dog",                  // Animal type
        "Stylish and durable leather collar for dogs.", // Description
        "Collar",               // Category
    ),
    new Food(
        "Gourmet Cat Food",     // Name
        24.99,                  // Price
        "cat_food.jpg",         // Image
        "Food",                 // type
        "Cat",                  // Animal type
        "Delicious wet food for adult cats.",   // Description
        "Fish",                 // Flavor
        "Adult",                // Age group
    )
];