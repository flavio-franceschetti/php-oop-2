<?php

require_once __DIR__ . '/../Model/CatProduct.php';
require_once __DIR__ . '/../Model/DogProduct.php';
require_once __DIR__ . '/../Model/Product.php';

$db = [
    new DogProduct('Food', 29.99, 'https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg', 'Amanova Premium Dog Food', 'Dry food for small adult dogs.', 'small', 'Beef', null, 'puppy' ),

    new DogProduct('Toy', 12.99, 'https://m.media-amazon.com/images/I/61br3pIiogL._AC_SL1500_.jpg', 'Chuckit! Ultra Ball', 'Durable rubber chew toy for medium-sized dogs.', 'medium', null, 'Rubber', 'All Ages' ),

    new CatProduct("Food", 24.99, "https://headsupfortails.com/cdn/shop/files/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.jpg?v=1715949708", "Whiskas", "Wet food for adult cats with fish flavor.","Fish", null, null, "Low", "Adult"),

    new CatProduct( "Toy", 39.99, "cat_scratching_post.jpg", "Deluxe Scratching Post", "A scratching post made of sisal rope for active cats.", null, "Sisal", "Long", "High", "All ages" )       
];