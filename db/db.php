<?php
// Import files
require_once __DIR__."/../classes/Product.php";
require_once __DIR__."/../classes/DogProduct.php";
require_once __DIR__."/../classes/CatProduct.php";

// Dog product List
$dogProductsList =[
    new DogProduct("http://www.google.com/url?sa=i&url=https%3A%2F%2Fsuperfeed.lk%2Fpremium-dog-food%2F&psig=AOvVaw3z_R7XTsR1EC0U9-xhLu02&ust=1728662806043000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNjL6_aYhIkDFQAAAAAdAAAAABAE", "Premium Dog Food", "food", 29.99),
    new DogProduct("http://www.google.com/url?sa=i&url=https%3A%2F%2Fpetshopbyfringestudio.com%2Fcollections%2Frubber-dog-toys&psig=AOvVaw2ZRXYbOkGxCI4AJlcJZTuL&ust=1728662870670000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCICIhqeZhIkDFQAAAAAdAAAAABAK", "Rubber Dog Toy", "toy", 9.99),
    new DogProduct("http://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nytimes.com%2Fwirecutter%2Freviews%2Fbest-dog-beds%2F&psig=AOvVaw33g6yCKQGhYTXTM_dgRY2g&ust=1728662943516000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCOCR6bmZhIkDFQAAAAAdAAAAABAE", "Cozy Dog Bed", "bed", 49.99),
    new DogProduct("http://img.freepik.com/free-photo/cocker-spaniel-plays-games-home_1303-27279.jpg?t=st=1728576610~exp=1728580210~hmac=be1f524d18d44883907862d9f5adb9425dd16d525518f91c4b7b587b08adab0d&w=740", "Interactive Dog Puzzle", "product", 19.99),
    new DogProduct("http://img.freepik.com/free-photo/dog-snacks-shoes_23-2147828963.jpg?t=st=1728576644~exp=1728580244~hmac=a2a46338eaad4954c794bdd0360cd4b0f44e98095fe540a01e61613bd301ee90&w=1480", "Dog Treats Variety Pack", "food", 14.99)
];

// Cat products list
$catProductsList = [
    new CatProduct("https://img.freepik.com/premium-photo/cat-food-graphs_23-2151537822.jpg?w=2000", "Gourmet Cat Food", "food", 24.99),
    new CatProduct("https://img.freepik.com/free-photo/adorable-cat-lifestyle_23-2151593312.jpg?t=st=1728577086~exp=1728580686~hmac=e6fe631f2df0b39fa7a1d586a0f32e487e2a0a785fe1c2db7b0aff73f0828107&w=740", "Plush Cat Toy", "toy", 12.99),
    new CatProduct("https://img.freepik.com/free-photo/adorable-cat-relaxing-indoors_23-2150692675.jpg?t=st=1728577126~exp=1728580726~hmac=eb1a6461217975fef2e9f8ad18ca91088257da9337c45afdb3ddafa7e990190a&w=740", "Luxury Cat Bed", "bed", 39.99),
    new CatProduct("https://img.freepik.com/free-photo/owner-giving-cat-treat_23-2150798727.jpg?t=st=1728577195~exp=1728580795~hmac=53e63b36973769193aac3590efe2ed0a7173d37d3fe0db1fb3a3fa88ca165762&w=740", "Cat Scratching Post", "product", 34.99),
    new CatProduct("https://img.freepik.com/free-photo/close-up-dog-treats_23-2150959971.jpg?t=st=1728577221~exp=1728580821~hmac=28c4719cee881692b502939e8a153f1ef5c4b6c8cc4a943f724eb7a501e1764a&w=1480", "Natural Cat Treats", "food", 15.99)
];


// Products list
$productsList = [
    "dogProducts"=>$dogProductsList,
    "catProducts"=>$catProductsList
]


?>